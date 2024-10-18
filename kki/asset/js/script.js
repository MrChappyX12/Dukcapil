const apiKey = 'API_KEY_MU';  // ganti dengan API key kamu
const apiUrl = 'https://webapi.bps.go.id/v1/api/list/model/data/lang/ind/domain/3571/var/185/key/${apiKey}';

fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        // Proses data di sini
        console.log(data);
        // Misal masukkan data ke dalam tabel
        let tableBody = '';
        data.data.forEach((item) => {
            tableBody += `<tr>
                            <td>${item.tahun}</td>
                            <td>${item.jumlah}</td>
                          </tr>`;
        });
        document.getElementById('data-table-body').innerHTML = tableBody;
    })
    .catch(error => console.error('Error fetching data:', error));
