$('#data-table').DataTable();
$('.select2').select2();
$('.datepicker-input').datepicker();

const tampil = () => {
    const data = document.getElementById('data').value.replace(/\s/g, "").toLowerCase();
    const hasil = document.getElementById('hasil').value = data;

    return hasil;
}

const data_pasien = () => {
    var antrian = $("#antrian").val()
     $.ajax({
        url: 'tindakan/json-data-auto-fill',
        data:"antrian="+antrian,
        success: function(data) {
            var json = data,
            obj = JSON.parse(json)
            
            // alert(obj.no_rm)
            $('#norm').val(obj.no_rm)
            $('#kode-poli').val(obj.nama_poli)
            $('#nama').val(obj.nama_pasien)
            $('#umur').val(obj.umur)
            $('#alamat').val(obj.alamat)

            sessionStorage.setItem('norm', obj.no_rm)
            sessionStorage.setItem('noantrian', obj.antrian)
            const getNorm = sessionStorage.getItem('norm').value
            var norm = obj.no_rm;
            
            if (getNorm !== norm) {
                sessionStorage.clear()
                sessionStorage.setItem('norm', obj.no_rm)
                sessionStorage.setItem('noantrian', obj.antrian)
            }
        },
     })
}


const urlTindakan = () => {
    const norm = sessionStorage.getItem('norm')
    const noantrian = sessionStorage.getItem('noantrian')
    const getNorm = document.getElementById('norm').value
    const getDokter = document.getElementById('dokter').value
    
    if (getNorm == '') {
        sessionStorage.clear()
    } else {
        window.location.href = '/tindakan/add/' + norm + '?antrian=' + noantrian
        sessionStorage.clear()
        sessionStorage.setItem('dokter', getDokter)
    }
}

const hargaObat = () => {
    var obat = $("#obat").val()
    if (obat !== '') {
        $.ajax({
            url: '/tindakan/json-data-harga-auto-fill',
            data:"obat="+obat,
            success: function(data) {
                var json = data,
                obj = JSON.parse(json)
                
                // alert(obj.no_rm)
                $('#HargaObat').val(obj.harga)
            },
        })
    } else {
        $('#HargaObat').val('0')
    }
}

const hargaTindakan = () => {
    var tindakan = $("#tindakan").val()
    $('#dokter').val(sessionStorage.getItem('dokter'))
    if (tindakan !== '') {
        $.ajax({
            url: '/tindakan/json-data-harga-tindakan-auto-fill',
            data:"tindakan="+tindakan,
            success: function(data) {
                var json = data,
                obj = JSON.parse(json)
                
                $('#HargaTindakan').val(obj.harga)
            },
        })
    } else {
        $('#HargaTindakan').val('0')
    }
}