<div class="col-md-12 margin-top-20">
    <form accept-charset="utf-8" action="#" id="article_comments" method="post">
        <input name="FormType" type="hidden" value="article_comments" />
        <input name="utf8" type="hidden" value="true" />

        <div class="form-coment margin-bottom-10">
            <div class="">
                <h5 class="title-form-coment">VIẾT BÌNH LUẬN CỦA BẠN:</h5>
            </div>
            <fieldset class="form-group">
                <input placeholder="Họ tên" type="text" class="form-control form-control-lg" value="" id="full-name"
                    name="Author" Required data-validation-error-msg="Không được để trống" data-validation="required" />
            </fieldset>
            <fieldset class="form-group">
                <input placeholder="Email" type="email" class="form-control form-control-lg" value="" id="email"
                    name="Email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                    data-validation-error-msg="Email sai định dạng" required />
            </fieldset>
            <fieldset class="form-group">
                <textarea placeholder="Nội dung" class="form-control form-control-lg" id="comment" name="Body" rows="6"
                    Required data-validation-error-msg="Không được để trống" data-validation="required"></textarea>
            </fieldset>
            <div>
                <button type="submit" class="btn btn-blues">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Gửi bình luận
                </button>
            </div>
        </div> <!-- End form mail -->
    </form>
</div>