numeral.register('locale', 'id', {
    delimiters: {
        thousands: '.',
        decimal: ','
    },
    abbreviations: {
        thousand: 'k',
        million: 'm',
        billion: 'b',
        trillion: 't'
    },
    currency: {
        symbol: 'Rp'
    }
});
numeral.locale('id');

function hitungNisab(){

	var emas = IDRtoInt($('#nisab').val());
	$('#besarNisab').html('Rp. '+numeral(emas * 85).format());

}

function IDRtoInt(price)
{
	var uang = price.split('.');
	if(isNaN(uang[0]))
	{
		uang[0] = '';
	}
	
	return uang.join('');
}


function hitungZakatPerTahun()
{
	var z1 = parseInt(IDRtoInt($('#z1').val()));
	var z2 = parseInt(IDRtoInt($('#z2').val()));
	var z3 = parseInt(IDRtoInt($('#z3').val()));
	var z4 = parseInt(IDRtoInt($('#z4').val()));
	var z5 = parseInt(IDRtoInt($('#z5').val()));
	var z6 = parseInt(IDRtoInt($('#z6').val()));
	// alert(z1+' '+z2+' '+z3+' '+z4+' '+z5+' '+z6);
	var jumlahUang = z1+z2+z3+z4+z5-z6;
	hitungNisab();
	// alert(jumlahUang);
	var nisab = IDRtoInt($('#besarNisab').html());
	if(jumlahUang > nisab)
	{
		var zakat = jumlahUang * 0.025;	
		
	}else{ 
		var jumlahUang = 0;
		var zakat = 0;
	}

	$('#jumlahPer1Tahun').html('Rp.'+numeral(jumlahUang).format());
	$('#jumlahZakatPer1Tahun').html('<strong> Rp.'+numeral(zakat).format()+'</strong>');

}

function hitungZakatProfesi()
{
	var p1 = parseInt(IDRtoInt($('#p1').val()));
	var p2 = parseInt(IDRtoInt($('#p2').val()));

	var pendapatan = (12 * p1)+p2;

	$('#pendapatanProfesiPerTahun').html('Rp.'+numeral(pendapatan).format());

	var p3 = parseInt(IDRtoInt($('#p3').val()));
	var p4 = parseInt(IDRtoInt($('#p4').val()));

	var pengeluaran = (12 * p3)+p4;

	$('#pengeluaranProfesiPerTahun').html('Rp.'+numeral(pengeluaran).format());
	var jmlPendapatan = pendapatan - pengeluaran;
	hitungNisab();
	var nisab = IDRtoInt($('#besarNisab').html());

	if(jmlPendapatan > nisab)
	{
		var zakat = jmlPendapatan * 0.025;	
		
	}else{
		jmlPendapatan = 0;
		var zakat = 0;
	}

	$('#jumlahPenghasilanKenaZakat').html('Rp.'+numeral(jmlPendapatan).format());
	$('#jumlahZakatProfesi').html('<strong> Rp.'+numeral(zakat).format()+'</strong>');
}

function hitungZakatUsaha()
{
	var h1 = parseInt(IDRtoInt($('#h1').val()));
	var h2 = parseInt(IDRtoInt($('#h2').val()));
	var h3 = parseFloat($('#h3').val());
	// alert(h1+' '+h2+' '+h3);

	if(isNaN(h3))
	 { 
	    alert('Masukkan angka saja pada komposisi kepemilikan');
	    $('#h3').val('');
	 }

	var hartaUsaha = 0.01*h3*(h1-h2);

	$('#jmlHartaUsaha').html('Rp.'+numeral(hartaUsaha).format());
	hitungNisab();
	var nisab = IDRtoInt($('#besarNisab').html());
	if(hartaUsaha > nisab)
	{	
		var jmlHartaUsahaKenaZakat = hartaUsaha;
		var zakat = hartaUsaha * 0.025;
	}
	else{
		var jmlHartaUsahaKenaZakat = 0;
		var zakat = 0;
	}

	$('#jmlUsahaKenaZakat').html('Rp.'+numeral(jmlHartaUsahaKenaZakat).format());
	$('#jmlZakatUsaha').html('<strong> Rp.'+numeral(zakat).format()+'</strong>');

	// alert(zakatable)

}

function hitungZakatDagang()
{
	var d1 = parseInt(IDRtoInt($('#d1').val()));
	var d2 = parseInt(IDRtoInt($('#d2').val()));
	var d3 = parseInt(IDRtoInt($('#d3').val()));
	var d4 = parseInt(IDRtoInt($('#d4').val()));
	var d5 = parseInt(IDRtoInt($('#d5').val()));
	
	// alert(d1+' '+d2+' '+d3+' '+d4+' '+d5);		

	var jmlHartaDagang = d1+d2+d3;
	var jmlHutangDanRugi = d4+d5;

	$('#jmlHartaDagang').html('Rp.'+numeral(jmlHartaDagang).format());
	$('#jmlHutangDanRugi').html('Rp.'+numeral(jmlHutangDanRugi).format());

	var jmlTotalHartaDagang = jmlHartaDagang - jmlHutangDanRugi;

	hitungNisab();
	var nisab = IDRtoInt($('#besarNisab').html());
	if(jmlTotalHartaDagang > nisab)
	{	
		var jmlHartaDagangKenaZakat = jmlTotalHartaDagang;
		var zakat = jmlHartaDagangKenaZakat * 0.025;
	}
	else{
		var jmlHartaDagangKenaZakat = 0;
		var zakat = 0;
	}
	// alert(zakat+' '+jmlHartaDagangKenaZakat);		
	$('#jmlDagangKenaZakat').html('Rp.'+numeral(jmlHartaDagangKenaZakat).format());
	$('#jmlZakatDagang').html('<strong> Rp.'+numeral(zakat).format()+'</strong>');

	// alert(zakatable)

}
