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
  <script src="../assets/js/jquery.priceformat.min.js"></script>
  <script src="../assets/js/hover/setting.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <script id="dsq-count-scr" src="//bmtpasbantul-com.disqus.com/count.js" async></script>

  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/kalZakat.js"></script>
  <script type="text/javascript">
      
      $('#print').click(function(){

        window.print();

      });

      $('.bungaPertahun').keyup(function(){
        var value = $(this).val()/12.00;
        // alert(value);
        if(isNaN(value))
          { 
            alert('Masukkan Angka saja');
            $(this).val('');
          }else{
            $(this).parent().children('small').html('('+value.toFixed(2)+' %/bulan)');    
          }
      });

      $('.lamaPembiayaan').keyup(function(){
        var value = $(this).val()/12;
        $(this).parent().children('small').html('('+value.toFixed(2)+' tahun)');
      });

    function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }


      $('.priceFormatIDR').priceFormat({
        prefix: 'Rp.',
        centsLimit: 0,
        clearPrefix: true,
        clearOnEmpty: false,
        thousandsSeparator: '.',

      });

      $('.onlyInt').priceFormat({
        clearPrefix: true,
        clearOnEmpty: true,
        centsLimit: 0,
        prefix: '',
      });

      $('.bungaOnly').priceFormat({
        clearPrefix: true,
        clearOnEmpty: true,
        centsLimit: 2,
        prefix: '',
      });

     $('.persen').priceFormat({
        clearPrefix: true,
        clearSuffix: true,
        clearOnEmpty: true,
        centsLimit: 2,
        prefix: '',
        suffix: ' %'
      });

  </script>