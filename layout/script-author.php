<!-- JavaScript Library Files -->
  <!-- <script src="../assets/js/jquery.min.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
  <!--<script src="../assets/summernote/summernote.js"></script>-->
  <script src="../assets/ckeditor/ckeditor.js"></script>
  <script src="../assets/datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   
  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>

  <script type="text/javascript">
     CKEDITOR.replace('textareaCKeditor');
     CKEDITOR.replace('textareaCKeditor2'); 
     var loadFile = function(event) { 
        var output = document.getElementById('pictHere');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

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

      $('#tgl_otomatis').on('change', function(){

        var checked = $(this).prop('checked');
        // alert($(this).prop('checked'));
        if (checked){
          $('#tgl_upload').val('');
          $('#tgl_upload').attr('disabled', 'disabled');
        }else{
          $('#tgl_upload').removeAttr('disabled');
        }

      });

      $('.datepicker').datepicker({
         format: "yyyy-mm-dd",
         maxViewMode: 1,
         todayHighlight: true
      });
      
    //   

    });
    
  </script>