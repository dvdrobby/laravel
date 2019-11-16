<div class="container">
    <div class="row cart">
        <div class="col-lg">
            <h1>Shopping Cart</h1>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col"><input class="" type="checkbox" value="" id=""></th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"><input class="" type="checkbox" value="" id=""></td>
                        <td scope="col"><div class="input-group">Product 1</div></td>
                        <td scope="col">89000</td>
                        <td scope="col">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="input-group-text">-</button>
                                </div>
                                <input type="number" class="form-control check" style="width: 2px">
                                <div class="input-group-append">
                                    <button class="input-group-text">+</b>
                                </div>
                            </div>
                        </td>
                        <td scope="col">89000</td>
                        <td scope="col">
                            <div><a href="">Delete</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col"><input class="" type="checkbox" value="" id=""></td>
                        <td scope="col"><div class="input-group">Product 1</div></td>
                        <td scope="col">89000</td>
                        <td scope="col">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="input-group-text">-</button>
                                </div>
                                <input type="number" class="form-control" style="width: 2px;">
                                <div class="input-group-append">
                                    <button class="input-group-text">+</b>
                                </div>
                            </div>
                        </td>
                        <td scope="col">89000</td>
                        <td scope="col">
                            <div><a href="">Delete</a></div>
                        </td>
                    </tr>
                </tbody>
                </table>
                <hr>
                <div class="row justify-content-right">
                    <div class="col-md-6"></div>
                    <div class="col-md-3 float-left"><strong>Subtotal produk:</strong></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-primary float-right">Checkout</button></div>
                <div class="col-md-2"><a href="{{ route('fashion') }}" class="btn btn-light float-right">Lanjut Belanja</a></div>
                </div>
        </div>
    </div>
    <div class="row mt-4 border-top">
        <div class="col mt-5">
            <h4>Products you might like</h4>
        </div>
        <div class="row mt-3">
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/category/item/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
