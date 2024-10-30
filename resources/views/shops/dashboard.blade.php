@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.Dashboard') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('customer.Home') }}">{{ __('messages.Home') }}</a></li>
                    <li>{{ __('messages.Dashboard') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description"
                        aria-selected="true">{{ __('messages.AccountDetail') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false">{{ __('messages.orders') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="products-tab" data-bs-toggle="tab" href="#products" role="tab"
                        aria-controls="products" aria-selected="false">{{ __('messages.MyProducts') }}</a>
                </li>

                <li class="nav-item" role="presentation">
                    <form class="" action="{{ route('chat', ['receiverId' => $admin]) }}" method="GET">
                        @csrf
                        <button type="submit" class="nav-link th-btn ">{{ __('messages.ChatCenter') }}</button>
                    </form>
                    {{--  <a class="nav-link th-btn" id="chat-tab" data-bs-toggle="tab"
                        href="{{ route('chat', ['receiverId' => $firstgigs->handyman->user->id]) }}" role="tab"
                        aria-controls="chats" aria-selected="false">Chat Center</a>  --}}
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Account Details Tab -->
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="profile-edit-wrapper">
                        <h2>{{ __('messages.EditProfile') }}</h2>
                        <form action="{{ route('storeowner.dashboard.update') }}" method="POST"
                            enctype="multipart/form-data" class="profile-edit-form">
                            @csrf

                            <!-- Profile Image -->
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    @if ($user->image)
                                        <img src="{{ asset('storage/profile_images/' . $user->image) }}"
                                            alt="Profile Picture">
                                    @else
                                        <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                            alt="Default Profile Picture">
                                    @endif
                                </div>
                                <label for="image">{{ __('messages.UploadPic') }}</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Name -->
                            <div class="d-flex justify-content-between">

                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="name">{{ __('messages.Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $user->name }}" required>
                                </div>

                                <!-- Email -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="email">{{ __('messages.Email') }}</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $user->email }}" required>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <!-- Phone -->
                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="phone">{{ __('messages.Phone') }}</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ $user->delivery_info->phone ?? ' ' }}" required>
                                </div>
                                <!-- building_no -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="building_no">{{ __('messages.BuildingNo') }}</label>
                                    <input type="text" name="building_no" id="building_no" class="ml-2 form-control"
                                        value="{{ $user->delivery_info->building_no ?? ' ' }}" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- City -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="city">{{ __('messages.City') }}</label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        value="{{ $user->delivery_info->city ?? ' ' }}" required>
                                </div>

                                <!-- Location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location">{{ __('messages.Location') }}</label>
                                    <input type="text" name="location" id="location" class="form-control"
                                        value="{{ $user->delivery_info->location ?? ' ' }}" required>
                                </div>
                            </div>


                            <h6 class="mb-0">Store Detail Profile</h6>
                            <hr>
                            <div class="d-flex">

                                <!-- store_name -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="store_name">{{ __('messages.StoreNameEn') }}</label>
                                    <input type="text" name="store_name" id="store_name" class="form-control"
                                        value="{{ $storeowner->store_name ?? '0 ' }}" required>
                                </div>

                                <!-- store_name_ar -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="store_name_ar">{{ __('messages.StoreNameAr') }}</label>
                                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control"
                                        value="{{ $storeowner->store_name_ar ?? ' ' }}" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- contact_number -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="contact_number">{{ __('messages.ContactNumber') }}</label>
                                    <input type="text" name="contact_number" id="contact_number" class="form-control"
                                        value="{{ $storeowner->contact_number ?? '0 ' }}" required>
                                </div>

                                <!-- location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location_sotre">{{ __('messages.StoreLocation') }}</label>
                                    <input type="text" name="location_sotre" id="location_sotre" class="form-control"
                                        value="{{ $store->location ?? ' ' }}" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- address_ar -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="address_ar">{{ __('messages.AddressAr') }}</label>
                                    <input type="text" name="address_ar" id="address_ar" class="form-control"
                                        value="{{ $storeowner->address_ar ?? '0 ' }}" required>
                                </div>

                                <!-- address -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="address">{{ __('messages.AddressEn') }}</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ $storeowner->address ?? ' ' }}" required>
                                </div>
                            </div>


                            <!-- description -->
                            <div class="form-group mb-0">
                                <label for="description">{{ __('messages.DescriptionEn') }}</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    value="{{ $store->description ?? ' ' }}" required>
                            </div>
                            <!-- description ar -->
                            <div class="form-group">
                                <label for="description_ar">{{ __('messages.DescriptionAr') }}</label>
                                <input type="text" name="description_ar" id="description_ar" class="form-control"
                                    value="{{ $store->description_ar ?? ' ' }}" required>
                            </div>



                            <button type="submit" class="th-btn">{{ __('messages.SaveChanges') }}</button>

                            {{--  <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id]) }}"
                                class="mt-3 th-btn">View As
                                Client</a>  --}}

                        </form>
                    </div>
                </div>
                <!-- products Details Tab -->
                <div class="tab-pane fade show " id="products" role="tabpanel" aria-labelledby="products-tab">
                    {{--  product CRUD  are to put here  --}}
                    <!-- Products Tab -->
                    <div class="tab-pane fade show active" id="products" role="tabpanel"
                        aria-labelledby="products-tab">
                        <h2>{{ __('messages.ManageProducts') }}</h2>

                        <!-- Add New Product Button -->
                        <button id="toggleAddProductForm"
                            class="btn btn-primary mb-4">{{ __('messages.NewProduct') }}</button>

                        <!-- Add Product Form -->
                        <div id="addProductForm" style="display: none;" class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('messages.NewProduct') }}</h5>
                                <form action="{{ route('storeowner.products.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">{{ __('messages.ProductNameEn') }}</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_ar">{{ __('messages.ProductNameAr') }}</label>
                                        <input type="text" name="name_ar" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{ __('messages.DescriptionEn') }}</label>
                                        <textarea name="description" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description_ar">{{ __('messages.DescriptionAr') }}</label>
                                        <textarea name="description_ar" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">{{ __('messages.Price') }}</label>
                                        <input type="number" name="price" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock_quantity">{{ __('messages.StockQuantity') }}</label>
                                        <input type="number" name="stock_quantity" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{ __('messages.ProductImage') }}</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-success">{{ __('messages.AddProduct') }}</button>
                                </form>
                            </div>
                        </div>

                        <!-- Product List -->
                        <h5 class="mb-3">{{ __('messages.MyProducts') }}</h5>
                        <table class="  table table-bordered table-wrapper">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.Image') }}</th>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th>{{ __('messages.Description') }}</th>
                                    <th>{{ __('messages.Price') }}</th>
                                    <th>{{ __('messages.Stock') }}</th>
                                    <th>{{ __('messages.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <!-- Display Product Image -->
                                        <td data-label="Image">

                                            @if ($product->image)
                                                <img src="{{ asset('storage/product_images/' . $product->image->name) }}"
                                                    alt="Product Image" width="80" height="80">
                                            @else
                                                <span>{{ __('messages.NoImage') }}</span>
                                            @endif
                                        </td>
                                        <td data-label="Name">{{ $product->name }} / {{ $product->name_ar }}</td>
                                        <td data-label="Description" style="width:300px">{{ $product->description }} /
                                            {{ $product->description_ar }}</td>
                                        <td data-label="Price">{{ $product->price }}</td>
                                        <td data-label="Stock quantity">{{ $product->stock_quantity }}</td>
                                        <td data-label="Action">
                                            <!-- Edit Button -->
                                            <button class="btn btn-info"
                                                onclick="editProduct({{ $product->id }})">{{ __('messages.Edit') }}</button>

                                            <!-- Delete Form -->
                                            <form action="{{ route('storeowner.products.destroy', $product->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger">{{ __('messages.Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>

                    <!-- Edit Product Modal -->
                    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog"
                        aria-labelledby="editProductModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editProductForm" action="" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="POST">
                                        <div class="form-group">
                                            <label for="editName">{{ __('messages.ProductNameAr') }}</label>
                                            <input type="text" name="name" id="editName" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editNameAr">{{ __('messages.ProductNameEn') }}</label>
                                            <input type="text" name="name_ar" id="editNameAr" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">{{ __('messages.DescriptionEn') }}</label>
                                            <textarea name="description" id="editDescription" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescriptionAr">{{ __('messages.DescriptionAr') }}</label>
                                            <textarea name="description_ar" id="editDescriptionAr" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editPrice">{{ __('messages.Price') }}</label>
                                            <input type="number" name="price" id="editPrice" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editStockQuantity">{{ __('messages.StockQuantity') }}</label>
                                            <input type="number" name="stock_quantity" id="editStockQuantity"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editImage">{{ __('messages.ProductImage') }}</label>
                                            <input type="file" name="image" id="editImage" class="form-control">
                                        </div>
                                        <button type="submit"
                                            class="btn btn-success">{{ __('messages.UpdateProduct') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- JavaScript to Toggle the Form -->
                    <script>
                        document.getElementById('toggleAddProductForm').addEventListener('click', function() {
                            var form = document.getElementById('addProductForm');
                            form.style.display = form.style.display === 'none' ? 'block' : 'none';
                        });

                        function editProduct(productId) {
                            // Fetch the product data using AJAX
                            fetch(`/storeowner/products/${productId}/edit`)
                                .then(response => response.json())
                                .then(data => {
                                    // Fill in the form fields with the product data
                                    document.getElementById('editName').value = data.name;
                                    document.getElementById('editNameAr').value = data.name_ar;
                                    document.getElementById('editDescription').value = data.description;
                                    document.getElementById('editDescriptionAr').value = data.description_ar;
                                    document.getElementById('editPrice').value = data.price;
                                    document.getElementById('editStockQuantity').value = data.stock_quantity;

                                    // Set the action of the form to the update route
                                    document.getElementById('editProductForm').action = `/storeowner/products/${productId}`;

                                    // Show the modal
                                    $('#editProductModal').modal('show');
                                })
                                .catch(error => console.error('Error fetching product data:', error));
                        }
                    </script>
                </div>

                <!-- order Tab -->
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    {{--  the orders are here   --}}
                    <div class="tab-content" id="productTabContent">
                        <!-- Orders Tab -->
                        <div class="tab-pane fade show active" id="orders" role="tabpanel"
                            aria-labelledby="orders-tab">
                            <h2>{{ __('messages.SalesOrders') }}</h2>
                            @forelse ($sales as $groupKey => $saleGroup)
                                @php
                                    [$saleDate, $userId] = explode('-', $groupKey);
                                    $totalAmount = $saleGroup->sum('total_amount'); // Sum total amounts for the group
                                    $user = $saleGroup->first()->user; // Get the user for this sale group
                                @endphp
                                <!-- Card for each sale group -->
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="my-0 font-weight-normal">
                                            {{ __('messages.Orderfrom') }}{{ $user->name }} {{ __('messages.on') }}
                                            {{ \Carbon\Carbon::parse($saleDate)->format('F j, Y g:i A') }}
                                        </h4>
                                        <span class="custom-total">
                                            {{ __('messages.Total') }}: {{ __('messages.JD') }}
                                            {{ number_format($totalAmount, 2) }}
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach ($saleGroup as $sale)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <!-- Compact product details -->
                                                        <strong>{{ __('messages.Product') }}:</strong>
                                                        {{ $sale->product->name }}
                                                        <span class="text-muted">(ID: {{ $sale->product_id }})</span> -
                                                        <strong>{{ __('messages.Quantity') }}:</strong>
                                                        {{ $sale->quantity_sold }} -
                                                        <strong>{{ __('messages.Total') }}:</strong>
                                                        {{ __('messages.JD') }}
                                                        {{ number_format($sale->total_amount, 2) }}
                                                    </div>
                                                    <div class="d-flex ">
                                                        <div style="margin-right:10px;" class="mr-3 custom-status">
                                                            <strong>{{ __('messages.Status') }}:</strong>
                                                            @if ($sale->status_id == 16)
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-info">{{ $sale->status->name }}</button>
                                                            @elseif($sale->status_id == 17)
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-primary">{{ $sale->status->name }}</button>
                                                            @elseif($sale->status_id == 18)
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-success">{{ $sale->status->name }}</button>
                                                            @elseif($sale->status_id == 19)
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-danger">{{ $sale->status->name }}</button>
                                                            @endif
                                                            {{--  <span class="badge badge-info">{{ $sale->status->name }}</span>  --}}
                                                        </div>
                                                        <!-- Action Buttons based on status -->
                                                        <div>
                                                            @if ($sale->status_id == 16)
                                                                <!-- Pending Confirmation: Show Confirm and Cancel Buttons -->
                                                                <form
                                                                    action="{{ route('storeowner.sale.update', $sale->id) }}"
                                                                    method="POST" class="d-inline-block">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <input type="hidden" name="status_id"
                                                                        value="17"> <!-- Confirm -->
                                                                    <button type="submit"
                                                                        class="btn btn-success">{{ __('messages.Confirm') }}</button>
                                                                </form>
                                                                <form
                                                                    action="{{ route('storeowner.sale.update', $sale->id) }}"
                                                                    method="POST" class="d-inline-block">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <input type="hidden" name="status_id"
                                                                        value="19"> <!-- Cancel -->
                                                                    <button type="submit"
                                                                        class="btn btn-danger">{{ __('messages.Cancel') }}</button>
                                                                </form>
                                                            @elseif ($sale->status_id == 17)
                                                                <!-- Approved: Show Delivered and Cancel Buttons -->
                                                                <form
                                                                    action="{{ route('storeowner.sale.update', $sale->id) }}"
                                                                    method="POST" class="d-inline-block">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <input type="hidden" name="status_id"
                                                                        value="18"> <!-- Delivered -->
                                                                    <button type="submit"
                                                                        class="btn btn-primary">{{ __('messages.Delivereds') }}</button>
                                                                </form>
                                                                <form
                                                                    action="{{ route('storeowner.sale.update', $sale->id) }}"
                                                                    method="POST" class="d-inline-block">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <input type="hidden" name="status_id"
                                                                        value="19"> <!-- Cancel -->
                                                                    <button type="submit"
                                                                        class="btn btn-danger">{{ __('messages.Cancel') }}</button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @empty
                                <p>No sales records found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <style>
            /* Basic table styling */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

            /* Responsive table */
            .table-wrapper {
                background-color: #f9f9f9;
                overflow-x: auto;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                /* Enable horizontal scrolling on small screens */
            }

            @media (max-width: 768px) {

                table,
                thead,
                tbody,
                th,
                td,
                tr {
                    display: block;
                    max-width: 100%;
                    /* Adjust as needed */
                    overflow-wrap: break-word;
                }

                thead tr {
                    display: none;
                    /* Hide the header on small screens */
                }

                tr {
                    margin-bottom: 10px;
                    border-bottom: 2px solid #ddd;
                    word-wrap: break-word;
                    white-space: normal;
                }

                td {
                    text-align: right;
                    padding-left: 50%;
                    position: relative;
                }

                td::before {
                    content: attr(data-label);
                    /* Add a label for each data cell */
                    position: absolute;
                    left: 10px;
                    width: calc(50% - 20px);
                    text-align: left;
                    font-weight: bold;
                }
            }
        </style>
    </section>
@endsection
