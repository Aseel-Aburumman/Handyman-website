<?php

namespace App\Observers;

use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use App\Models\Store;
use App\Models\Handyman;

use App\Models\StoreOwner;

class ReviewObserver
{
    public function saved(Review $review)
    {
        // 1. Handyman Rating Update
        if ($review->handyman_id) {
            $this->updateHandymanUserRating($review->handyman_id);
        }

        // 2. Client Rating Update
        if ($review->client_id) {
            $this->updateUserRating($review->client_id);
        }

        // 3. Product Rating Update
        if ($review->product_id) {
            $this->updateProductRating($review->product_id);
        }

        // 4. Store Rating Update
        if ($review->store_id) {
            $this->updateStoreRating($review->store_id);
        }
    }

    public function deleted(Review $review)
    {
        // Similar logic for deleted reviews
        $this->saved($review); // Recalculate in case a review is deleted
    }
    // Helper methods

    protected function updateHandymanUserRating($handymanId)
    {
        // Find the related handyman and their associated user ID
        $handyman = Handyman::find($handymanId);
        if ($handyman) {
            $userId = $handyman->user_id;

            // Calculate the average rating for the handyman's reviews
            $averageRating = Review::where('handyman_id', $handymanId)->avg('rating');

            // Update the user’s rating
            User::where('id', $userId)->update(['rating' => $averageRating]);
        }
    }

    protected function updateUserRating($userId)
    {
        $averageRating = Review::where('client_id', $userId)->avg('rating');

        User::where('id', $userId)->update(['rating' => $averageRating]);
    }

    protected function updateProductRating($productId)
    {
        $averageRating = Review::where('product_id', $productId)->avg('rating');
        Product::where('id', $productId)->update(['rating' => $averageRating]);

        // Update the store rating related to the product
        $storeId = Product::find($productId)->store_id;
        $this->updateStoreRating($storeId);
    }

    protected function updateStoreRating($storeId)
    {
        // Average rating across all reviews for this store
        $averageRating = Review::where('store_id', $storeId)
            ->orWhereIn('product_id', Product::where('store_id', $storeId)->pluck('id'))
            ->avg('rating');

        Store::where('id', $storeId)->update(['rating' => $averageRating]);

        // Update the store owner's rating
        $storeOwnerId = Store::find($storeId)->store_owner_id;
        $this->updateStoreOwnerRating($storeOwnerId);
    }

    protected function updateStoreOwnerRating($storeOwnerId)
    {
        // Average rating across all stores owned by the store owner
        $averageRating = Store::where('store_owner_id', $storeOwnerId)->avg('rating');
        StoreOwner::where('id', $storeOwnerId)->update(['rating' => $averageRating]);

        // Update the user rating associated with the store owner
        $userId = StoreOwner::find($storeOwnerId)->user_id;
        User::where('id', $userId)->update(['rating' => $averageRating]);
    }
}
