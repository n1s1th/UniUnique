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
        colombo: 'https://uoc.lk',
        japura: 'https://sjp.ac.lk',
        pera: 'https://www.pdn.ac.lk',
        kelani: 'https://www.kln.ac.lk',
        uva: 'https://www.uwu.ac.lk',
        ruhuna: 'https://www.ruh.ac.lk',
        eastern: 'https://www.esn.ac.lk'
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
