const tampil = () => {
    const data = document.getElementById('data').value.replace(/\s/g, "").toLowerCase();
    const hasil = document.getElementById('hasil').value = data;

    return hasil;
}