<script src="{{ asset('shop/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('shop/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('shop/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('shop/js/mixitup.min.js') }}"></script>
<script src="{{ asset('shop/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('shop/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('shop/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('shop/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('shop/js/main.js') }}"></script>
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '/update-cart',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: 'remove-from-cart',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>