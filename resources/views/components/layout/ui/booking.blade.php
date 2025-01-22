<section class="ul-booking-2 ul-section-spacing" id="ul-booking">
    <div class="ul-container">
        <div class="ul-booking-2-wrapper">
            <div class="row g-0">
                <!-- booking form -->
                <div class="col-md-7">
                    <div class="ul-booking-2-form-wrapper">
                        <div class="ul-booking-2-form-heading">
                            <span class="ul-section-sub-title"><i class="flaticon-tray"></i> أطلب الان <i
                                    class="flaticon-tray"></i></span>
                            <h2 class="ul-section-title">خدمة ممتازة في كل مرة</h2>
                        </div>

                        <form action="#" class="ul-booking-2-form">
                            <div class="row g-3">
                                <div class="col-12 col-xxs-12">
                                    <input type="text" name="name" id="name" placeholder="الاسم">
                                </div>

                                <div class="col-12 col-xxs-12">
                                    <input type="number" max="100" min="1" placeholder="عدد الاشخاص"
                                        name="guest" id="guest">
                                </div>

                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="اذا تريد ترك ملاحظاتك هنا"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="ul-btn">أطلب الأن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- opening time -->
                <div class="col-md-5">
                    <div class="ul-booking-2-opening-time">
                        <div class="heading">
                            <span class="ul-section-sub-title"><i class="flaticon-tray"></i> الفاتورة <i
                                    class="flaticon-tray"></i></span>
                            <p><span class="ul-section-sub-title">
                                    اضغط علي الصنف للتقيل عدد الطلبات او حذفه
                                </span></p>
                        </div>
                        <img src="{{asset('assets/img/empty.svg')}}" width="60%">
                        <table class="ul-booking-2-opening-time-table d-none">
                            <thead>
                                <tr>
                                    <th>الصنف</th>
                                    <th>السعر (الكميه)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10.00</td>
                                    <td>12.00</td>
                                </tr>

                                <tr>
                                    <td>20.00</td>
                                    <td>22.00</td>
                                </tr>

                                <tr>
                                    <td colspan="2">22.00 :الاجمالي السعر</td>
                                </tr>
                                <tr>
                                    <td colspan="2">السعر شامل الضريبة</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
