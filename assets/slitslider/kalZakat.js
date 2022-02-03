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
	var jumlahUang = (z1+z2+z3+z4+z5)-z6;
	hitungNisab();
	
	var nisab = IDRtoInt($('#besarNisab').html());
	if(jumlahUang > nisab)
	{
		var zakat = jumlahUang * 0.025;	
		$('#jumlahPer1Tahun').html('Rp.'+numeral(jumlahUang).format());
		$('#jumlahZakatPer1Tahun').html('<strong> Rp.'+numeral(zakat).format()+'</strong>');
	}

}
