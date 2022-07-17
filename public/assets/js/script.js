$('#data-table').DataTable();
$('.select2').select2();
$('.datepicker-input').datepicker();

const tampil = () => {
    const data = document.getElementById('data').value.replace(/\s/g, "").toLowerCase();
    const hasil = document.getElementById('hasil').value = data;

    return hasil;
}

const data_pasien = () => {
    var antrian = $("#antrian").val();
     $.ajax({
        url: 'tindakan/json-data-auto-fill',
        data:"antrian="+antrian,
        success: function(data) {
            var json = data,
            obj = JSON.parse(json);
            
            // alert(obj.no_rm)
            $('#norm').val(obj.no_rm)
            $('#kode-poli').val(obj.nama_poli)
            $('#nama').val(obj.nama_pasien)
            $('#alamat').val(obj.alamat)
        },
     })
}

const togglePassword = document.getElementById("icon-pw");
const password = document.getElementById("form-pw");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
            
    // toggle the icon
    this.classList.toggle("fa-eye");
});