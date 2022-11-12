<!-- product divs to display in bag -->
    <div class="productBagDiv">
        <div class="col-12">
            <button class="btn btn-outline-dark p-3 fs-4">X</button>
        </div>
        <div class="col-4 col-md-4">
            <img src="" alt="Image Not Found" class="img-fluid">
        </div>
        <div class="col-12 col-md-8">
            <h2>Product Name</h2>
            <h3 class="text-muted">Product Code</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <label for="color" class="ms-2">Color:</label>
                            <label for="dbColor"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="color" class="ms-2">Size:</label>
                            <label for="dbSize"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex my-3">
                                <label for="quantity" class=" mt-1 me-3 fw-bold fs-5">Qantity:</label>
                                <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(false)"
                                type="button" id="decreaseQuantity">
                                    <i class="bi bi-arrow-down-square"></i>
                                </div>

                                <input type="number" value="1" name="quantity" id="quantity"
                                class="mt-2 text-center border-0" readonly style="width: 50px; height:27px">
                                
                                <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(true)"
                                type="button" id="increaseQuantity">
                                    <i class="bi bi-arrow-up-square p-0"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- product divs to display in bag -->