<!-- JavaScript Library Files -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery.easing.js"></script>
  <script src="../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../assets/js/modernizr.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.elastislide.js"></script>
  <script src="../assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="../assets/js/sequence/setting.js"></script>
  <script src="../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../assets/js/application.js"></script>
  <script src="../assets/js/jquery.flexslider.js"></script>
  <script src="../assets/js/hover/jquery-hover-effect.js"></script>
  <script src="../assets/js/hover/setting.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

      // $('#daftarNama').scrollspy();
        $('#selectName').select2();

        $('.delte').on('click', function(){

          var id = $(this).attr('data-id');

          $('#deleteNameGallery').modal('show');

          $('.yakin').click(function(){

          var data = 'id='+id+'&action=deleteNameGallery';
             $.ajax({
                type:"post",
                url:"php/gallery.php",
                data: data,    // multiple data sent using ajax
                success: function (respon) {

                  if(respon =='1')
                  {
                    alert('Nama Galery berhasil dihapus');
                    window.location.href = '?page=gallery';
                  }
                }
              });

          });

        });

    });
    
  </script>