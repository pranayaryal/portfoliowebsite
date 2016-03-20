<?php if ($this->customer) { ?>
<? $defaultWishlist = $this->customer->defaultWishlist(); ?>

<div>
    <!-- Add to wishlist section -->

    <div class="btn-group">
        <button type="button" id="default_wishlist"
                class="btn btn-sm btn-warning"
                data-value="<?= $defaultWishlist->id ?>">
            <i class="fa fa-heart"></i>
            Add to Wishlist
        </button>
        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" id="wishlists">

            <?php foreach($this->customer->wishlists as $wishlist): ?>
            <li><a href="/account/wishlists" data-value="<?= $wishlist->id ?>"><?= $wishlist->title?></a></li>
            <?php endforeach ?>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="create-wishlist">Create Another List</a></li>
        </ul>
        <input type="hidden" name="wishlist_id" id="wishlist_id" value=""/>
        <input type="hidden" name="wishlist_title" id="wishlist_title" value="" />
        <input type="hidden" name="wishlist_visibility" id="wishlist_visibility" value="" />
    </div>
    <!-- End of add to wishlist section -->
</div>
<?php } ?>
<script>
    $("ul#wishlists a, #default_wishlist").click(function(e){
        e.preventDefault();

        if ($(this).is("#create-wishlist")) {
            $('#createWishlist').modal('show');
        }else {
//				$('.modal-body p').val($(this).data('value'));
//				$('#bornWishlist').modal('show');
            $("input[name='wishlist_id']").val($(this).data('value'));
            $("#checkoutForm").submit();
        }
    });

    $("#wishlistcreate").submit(function(e) {
        e.preventDefault();
        $("input[name='wishlist_title']").val($('#title').val());
        $("input[name='wishlist_visibility']").val($('#visibility').val());
        $("#checkoutForm").submit();
    });
</script>

