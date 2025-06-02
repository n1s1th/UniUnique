document.addEventListener('DOMContentLoaded', function() {
    const universitySelect = document.getElementById('universitySelect');
    const letsGoBtn = document.getElementById('letsGoBtn');
    const mainContent = document.querySelector('.main-content');
    const moraText = document.querySelector('.mora');

    // University data
    const universities = {
        'mora': {
            name: 'Mora',
            fullName: 'University of Moratuwa',
            color: '#8b4d8f'
        },
        'pera': {
            name: 'Pera',
            fullName: 'University of Peradeniya',
            color: '#2c5aa0'
        },
        'japura': {
            name: 'Japura',
            fullName: 'University of Sri Jayewardenepura',
            color: '#d63384'
        },
        'kelani': {
            name: 'Kelani',
            fullName: 'University of Kelaniya',
            color: '#198754'
        },
        'uva': {
            name: 'Uva',
            fullName: 'Uva Wellassa University',
            color: '#fd7e14'
        },
        'colombo': {
            name: 'Colombo',
            fullName: 'University of Colombo',
            color: '#6f42c1'
        },
        'ruhuna': {
            name: 'Ruhuna',
            fullName: 'University of Ruhuna',
            color: '#20c997'
        },
        'eastern': {
            name: 'Eastern',
            fullName: 'Eastern University',
            color: '#dc3545'
        }
    };

    // Initially disable the button
    letsGoBtn.disabled = true;

    // Handle university selection
    universitySelect.addEventListener('change', function() {
        const selectedValue = this.value;
        
        if (selectedValue) {
            const university = universities[selectedValue];
            
            // Update the display name
            moraText.textContent = university.name;
            moraText.style.color = university.color;
            
            // Enable the button
            letsGoBtn.disabled = false;
            letsGoBtn.style.background = university.color;
            
            // Add selection animation
            mainContent.style.transform = 'scale(1.02)';
            setTimeout(() => {
                mainContent.style.transform = 'scale(1)';
            }, 200);
        } else {
            // Reset to default
            moraText.textContent = 'Mora';
            moraText.style.color = '#8b4d8f';
            letsGoBtn.disabled = true;
            letsGoBtn.style.background = '#ccc';
        }
    });

    // Handle Let's Go button click
    letsGoBtn.addEventListener('click', function() {
        const selectedValue = universitySelect.value;
        
        if (selectedValue) {
            // Add loading state
            this.textContent = 'Loading...';
            this.classList.add('loading');
            
            // Simulate navigation delay
            setTimeout(() => {
                // In a real application, you would navigate to the main platform
                // For now, we'll show an alert
                alert(`Welcome to UniUnique ${universities[selectedValue].name}!`);
                
                // Reset button
                this.textContent = "Let's Go!";
                this.classList.remove('loading');
                
                // Here you would typically redirect to the main platform
                // window.location.href = `platform.html?uni=${selectedValue}`;
            }, 1500);
        }
    });

    // Add hover effects to background images
    const bgImages = document.querySelectorAll('.bg-image');
    bgImages.forEach((img, index) => {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
            this.style.zIndex = '5';
        });
        
        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
            this.style.zIndex = '1';
        });
    });

    // Add entrance animation
    setTimeout(() => {
        mainContent.style.opacity = '0';
        mainContent.style.transform = 'translateY(30px)';
        mainContent.style.transition = 'all 0.8s ease';
        
        setTimeout(() => {
            mainContent.style.opacity = '1';
            mainContent.style.transform = 'translateY(0)';
        }, 100);
    }, 100);

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && !letsGoBtn.disabled) {
            letsGoBtn.click();
        }
    });
});

// Add some interactive background effects
function createFloatingElements() {
    const container = document.querySelector('.bg-images');
    
    for (let i = 0; i < 3; i++) {
        const element = document.createElement('div');
        element.className = 'floating-element';
        element.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(139, 77, 143, 0.3);
            border-radius: 50%;
            animation: floatUp 8s linear infinite;
            animation-delay: ${i * 2}s;
            left: ${Math.random() * 100}%;
            bottom: -10px;
        `;
        
        container.appendChild(element);
    }
}

// CSS for floating elements (add to your CSS)
const floatingCSS = `
@keyframes floatUp {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
    }
    100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
    }
}
`;

// Add the floating CSS
const style = document.createElement('style');
style.textContent = floatingCSS;
document.head.appendChild(style);

// Initialize floating elements
createFloatingElements();
