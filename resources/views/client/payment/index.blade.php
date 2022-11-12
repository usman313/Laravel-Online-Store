@extends('client.app')

@section('content')
    <div class="container-fluid">
        <h3 class="text-center py-3">Checkout</h3>
        <div class="row gap-2">
            <div class="col-md-12 col-lg-3 table-responsive">
                <table class="table border">
                    <tbody>
                        <tr>
                            <th colspan="2"><h5 class="text-warning">Shipment Credentials</h5></th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 w-100 noFocus" type="fullName" name="fullName" id="fullName" placeholder="Full Name">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 w-100 noFocus" type="email" name="email" id="email" placeholder="Email Address">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 w-100 noFocus" type="email" name="confirmEmail" id="confirmEmail" placeholder="Confirm Email">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 w-100 noFocus" type="text" name="address" id="address" placeholder="Address">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="city" id="city" class="form-select border-0 noFocus" aria-label="Default select example">
                                    <option class="text-center" value="" selected disabled>------- Select The City -------</option>
								    <option value="Islamabad">Islamabad</option>
								    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
								    <option value="Ahmadpur East">Ahmadpur East</option>
								    <option value="Ali Khan Abad">Ali Khan Abad</option>
								    <option value="Alipur">Alipur</option>
								    <option value="Arifwala">Arifwala</option>
								    <option value="Attock">Attock</option>
								    <option value="Bhera">Bhera</option>
								    <option value="Bhalwal">Bhalwal</option>
								    <option value="Bahawalnagar">Bahawalnagar</option>
								    <option value="Bahawalpur">Bahawalpur</option>
								    <option value="Bhakkar">Bhakkar</option>
								    <option value="Burewala">Burewala</option>
								    <option value="Chillianwala">Chillianwala</option>
								    <option value="Chakwal">Chakwal</option>
								    <option value="Chichawatni">Chichawatni</option>
								    <option value="Chiniot">Chiniot</option>
								    <option value="Chishtian">Chishtian</option>
								    <option value="Daska">Daska</option>
								    <option value="Darya Khan">Darya Khan</option>
								    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
								    <option value="Dhaular">Dhaular</option>
								    <option value="Dina">Dina</option>
								    <option value="Dinga">Dinga</option>
								    <option value="Dipalpur">Dipalpur</option>
								    <option value="Faisalabad">Faisalabad</option>
								    <option value="Ferozewala">Ferozewala</option>
								    <option value="Fateh Jhang">Fateh Jang</option>
								    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
								    <option value="Gojra">Gojra</option>
								    <option value="Gujranwala">Gujranwala</option>
								    <option value="Gujrat">Gujrat</option>
								    <option value="Gujar Khan">Gujar Khan</option>
								    <option value="Hafizabad">Hafizabad</option>
								    <option value="Haroonabad">Haroonabad</option>
								    <option value="Hasilpur">Hasilpur</option>
								    <option value="Haveli Lakha">Haveli Lakha</option>
								    <option value="Jatoi">Jatoi</option>
								    <option value="Jalalpur">Jalalpur</option>
								    <option value="Jattan">Jattan</option>
								    <option value="Jampur">Jampur</option>
								    <option value="Jaranwala">Jaranwala</option>
								    <option value="Jhang">Jhang</option>
								    <option value="Jhelum">Jhelum</option>
								    <option value="Kalabagh">Kalabagh</option>
								    <option value="Karor Lal Esan">Karor Lal Esan</option>
								    <option value="Kasur">Kasur</option>
								    <option value="Kamalia">Kamalia</option>
								    <option value="Kamoke">Kamoke</option>
								    <option value="Khanewal">Khanewal</option>
								    <option value="Khanpur">Khanpur</option>
								    <option value="Kharian">Kharian</option>
								    <option value="Khushab">Khushab</option>
								    <option value="Kot Addu">Kot Addu</option>
								    <option value="Jauharabad">Jauharabad</option>
								    <option value="Lahore">Lahore</option>
								    <option value="Lalamusa">Lalamusa</option>
								    <option value="Layyah">Layyah</option>
								    <option value="Liaquat Pur">Liaquat Pur</option>
								    <option value="Lodhran">Lodhran</option>
								    <option value="Malakwal">Malakwal</option>
								    <option value="Mamoori">Mamoori</option>
								    <option value="Mailsi">Mailsi</option>
								    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
								    <option value="Mian Channu">Mian Channu</option>
								    <option value="Mianwali">Mianwali</option>
								    <option value="Multan">Multan</option>
								    <option value="Murree">Murree</option>
								    <option value="Muridke">Muridke</option>
								    <option value="Mianwali Bangla">Mianwali Bangla</option>
								    <option value="Muzaffargarh">Muzaffargarh</option>
								    <option value="Narowal">Narowal</option>
								    <option value="Nankana Sahib">Nankana Sahib</option>
								    <option value="Okara">Okara</option>
								    <option value="Renala Khurd">Renala Khurd</option>
                                </select>
                            </td>
                            <td class="border-start">
                                <input class="border-0 w-100 noFocus " type="number" name="zipCode" id="zipCode" placeholder="Zip Code">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 noFocus w-100" type="number" name="mobile" id="mobile" placeholder="Mobile Number">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="border-0 noFocus w-100" type="number" name="confirmMobile" id="cnfirmMobile" placeholder="Confirm Number">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 col-lg-3 table-responsive">
                <table class="table border">
                    <tbody>
                        <tr>
                            <th>
                                <h5 class="text-warning">Payement Details</h5>
                            </th>
                            <th>
                                <h5 class="text-dark text-muted">(Secure <i class="bi bi-lock"></i>)</h5>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h5>Select Method</h5>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td class="border-end p-0">
                                <button class="btn btn-outline-dark h-100 w-100 border-0 noFocus">
                                    <i class="bi bi-wallet fs-3 biButton"></i>
                                    <p style="font-size: 14px">Cash on Delivery</p>
                                </button>
                            </td>
                            <td class="border-end p-0">
                                <button class="btn btn-outline-dark h-100 w-100 border-0 noFocus">
                                    <i class="bi bi-credit-card fs-3 biButton"></i>
                                    <p style="font-size: 14px">Visa/Master Card</p>
                                </button>
                            </td> -->
                            <td class="border-end">
                                <label class="text-center">
                                    <input type="radio" name="test" value="small" class="" checked>
                                    <i class="bi bi-wallet fs-4"></i><br>Cash on Delivery
                                </label>
                            </td>
                            <td>
                                <label class="text-center">
                                    <input type="radio" name="test" value="big" class="">
                                    <i class="bi bi-credit-card fs-4"></i><br>VISA/Master Card
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h5>Discount Coupen</h5>
                                <p class="text-muted" style="font-size:14px">Enter Your Coupen Code if Any</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="p-0">
                                <button class="btn btn-outline-dark h-100 w-100 py-2 text-center border-0">Apply</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 col-lg-5 table-responsive">
                <table class="table border">
                    <tbody>
                        <th colspan="2">
                            <h5 class="text-warning">Shopping Bag</h5>
                        </th>
                        <tr>
                            <td class="border-end">
                                <h4 class="text-muted fs-6 text-start">Subtotal</h4>
                            </td>
                            <td class="text-end">
                                <input class="border-0 noFocus w-100" type="number" name="total" id="total" placeholder="Total Amoune">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-end">
                                <h4 class="text-muted text-start">Shipping & Handlings</h4>
                            </td>
                            <td class="text-end">
                                <input class="border-0 noFocus w-100" type="number" name="ship" id="ship" placeholder="Shipping Amount">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-end">
                                <h3>Grand Total</h3>
                            </td>
                            <td>
                                <input class="border-0 noFocus w-100" type="number" name="grandTotal" id="drandTotal" placeholder="Grand Total">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="t&c">
                                    <label class="form-check-label" for="t&c">
                                        Terms And Conditions
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0" colspan="2">
                                <button class="btn btn-outline-dark h-100 w-100 border-0 py-3 text-center">
                                    Place My Order
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection