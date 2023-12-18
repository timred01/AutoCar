<footer class="main-footer">
    <div class="footer">
        &copy;
        <b>
            <span class="text-gradient">AUTOCAR</span>
        </b>
        <script>
            document.write(new Date().getFullYear());
        </script> | Crafted with 💛 by <b><span class="text-gradient">KELOMPOK 2</span></b></a>
    </div>
</footer>

<!-- General JS Scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<!-- Datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/scripts.js"></script>
<script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/custom.js"></script>
<script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/stisla.js"></script>

<!--=== Magnific Popup Min Js ===-->
<script src="<?= base_url() ?>assets/assets_shop/js/plugins/magnific-popup.min.js"></script>

<!-- Sweetalert JS -->
<script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/myscript.js"></script>
<script src="<?= base_url('assets/assets_stisla'); ?>/assets/js/sweetalert2.all.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#data_table').DataTable();
    });
</script>


<script>
    $(document).ready(function() {
        $('#data_table2').DataTable();
    });
</script>



<!-- MODAL IMAGE -->
<script>
    var modal = document.getElementById("Modal_gambar");


    var img = document.getElementsByClassName("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }


    var span = document.getElementsByClassName("close")[0];


    span.onclick = function() {
        modal.style.display = "none";
    }
</script>


<script>
    $('.popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',

        zoom: {
            enabled: true,

            duration: 300,
            easing: 'ease-in-out',


            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
</script>


</body>

</html>