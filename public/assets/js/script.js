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

$(document).on('click', '.btn-add-tindakan-to-cart', function(e) {
    let idTindakan = $(this).attr('data-tindakan-id')
    const tindakanRow = $(this).parents('tr').children()
    const kodeTindakan = $(tindakanRow[0]).text()
    let namaTindakan = $(tindakanRow[1]).text()
    let tarifTindakan = $(tindakanRow[2]).text()

    $('#tindakan-cart').append(`
        <tr>
            <input type="hidden" name="array_kode_tindakan[]" value="${kodeTindakan}">
            <td>${kodeTindakan}</td>
            <td>${namaTindakan}</td>
            <td>${tarifTindakan}</td>
            <td>
                <button type="button" class="btn btn-primary btn-move-tindakan-to-modal" data-tindakan-id="${idTindakan}">Hapus</button>
            </td>
        </tr>
    `)

    $(this).parents('tr').remove()
})

$(document).on('click', '.btn-move-tindakan-to-modal', function() {
    let idTindakan = $(this).attr('data-tindakan-id')
    const tindakanRow = $(this).parents('tr').children()
    const kodeTindakan = $(tindakanRow[0]).text()
    let namaTindakan = $(tindakanRow[1]).text()
    let tarifTindakan = $(tindakanRow[2]).text()

    $('#tindakan-modal').append(`
        <tr>
            <td>${kodeTindakan}</td>
            <td>${namaTindakan}</td>
            <td>${tarifTindakan}</td>
            <td>
                <button type="button" class="btn btn-primary btn-add-tindakan-to-cart" data-tindakan-id="${idTindakan}">Hapus</button>
            </td>
        </tr>
    `)

    $(this).parents('tr').remove()
})

$(document).on('click', '.btn-add-obat-to-cart', function(e) {
    let idObat = $(this).attr('data-obat-id')
    const obatRow = $(this).parents('tr').children()
    const kodeObat = $(obatRow[0]).text()
    let namaObat = $(obatRow[1]).text()
    let hargaObat = $(obatRow[2]).text()
    let satuanObat = $(obatRow[3]).text()

    $('#obat-cart').append(`
        <tr>
            <input type="hidden" name="array_kode_obat[]" value="${kodeObat}">
            <td>${kodeObat}</td>
            <td>${namaObat}</td>
            <td>${hargaObat}</td>
            <td>${satuanObat}</td>
            <td>
                <button type="button" class="btn btn-primary btn-move-tindakan-to-modal" data-obat-id="${idObat}">Hapus</button>
            </td>
        </tr>
    `)

    $(this).parents('tr').remove()
})

$(document).on('click', '.btn-move-obat-to-modal', function() {
    let idObat = $(this).attr('data-obat-id')
    const obatRow = $(this).parents('tr').children()
    const kodeObat = $(obatRow[0]).text()
    let namaObat = $(obatRow[1]).text()
    let hargaObat = $(obatRow[2]).text()
    let satuanObat = $(obatRow[3]).text()

    $('#obat-modal').append(`
        <tr>
            <td>${kodeObat}</td>
            <td>${namaObat}</td>
            <td>${hargaObat}</td>
            <td>${satuanObat}</td>
            <td>
                <button type="button" class="btn btn-primary btn-add-tindakan-to-cart" data-obat-id="${idObat}">Hapus</button>
            </td>
        </tr>
    `)

    $(this).parents('tr').remove()
})