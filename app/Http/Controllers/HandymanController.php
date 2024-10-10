<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handyman;

class HandymanController extends Controller
{
    public function getOne_Client($handymanId)
    {
        $handyman = Handyman::findOrFail($handymanId);

        // Count the number of reviews for this store
        // Get the handyman along with the count of related reviews and gigs
        $handyman = Handyman::withCount(['reviews', 'gigs'])
            ->with(['skillCertificates.skill', 'skillCertificates.status'])
            ->findOrFail($handymanId);

        // Now you can access the counts like this:
        $reviewCount = $handyman->reviews_count;  // This gives the number of reviews
        $gigCount = $handyman->gigs_count;        // This gives the number of gigs
        $allreviews = $handyman->reviews()->get();

        return view('handyman.clinent_perspective', compact('allreviews', 'handyman', 'reviewCount', 'gigCount'));
    }
}
