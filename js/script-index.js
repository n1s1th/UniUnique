document.addEventListener('DOMContentLoaded', function () {
    const universitySelect = document.getElementById('universitySelect');
    const letsGoBtn = document.getElementById('letsGoBtn');

    const universities = {
        mora: { name: 'Mora', color: '#8b4d8f' },
        colombo: { name: 'Colombo', color: '#6f42c1' },
        japura: { name: 'Japura', color: '#d63384' },
        pera: { name: 'Pera', color: '#2c5aa0' },
        kelani: { name: 'Kelani', color: '#198754' },
        uva: { name: 'Uva', color: '#fd7e14' },
        ruhuna: { name: 'Ruhuna', color: '#20c997' },
        eastern: { name: 'Eastern', color: '#dc3545' }
    };

    const redirectURLs = {
        mora: 'pages/home.html',
        colombo: 'pages/homecol.html',
        japura: 'pages/homejapura.html',
        pera: 'pages/homepera.html',
        kelani: 'pages/homekelaniya.html',
        uva: 'pages/homeuva.html',
        ruhuna: 'pages/homeruhuna.html',
        eastern: 'pages/homeeastern.html'
    };

    universitySelect.addEventListener('change', function () {
        const selectedValue = this.value;
        if (selectedValue && universities[selectedValue]) {
            letsGoBtn.disabled = false;
            letsGoBtn.style.background = universities[selectedValue].color;
        } else {
            letsGoBtn.disabled = true;
            letsGoBtn.style.background = '#ccc';
        }
    });

    letsGoBtn.addEventListener('click', function () {
        const selectedValue = universitySelect.value;
        if (selectedValue && redirectURLs[selectedValue]) {
            this.textContent = 'Loading...';
            setTimeout(() => {
                window.location.href = redirectURLs[selectedValue];
            }, 1000);
        }
    });
});
