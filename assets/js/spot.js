document.addEventListener('DOMContentLoaded', () => {
    
    // Advanced Search Button Interaction
    const advancedBtn = document.getElementById('advancedBtn');
    advancedBtn.addEventListener('click', () => {
        alert('Opening Advanced Search Filters...');
    });

    // Submit a New Spot Button Interaction
    const submitSpotBtn = document.getElementById('submitSpotBtn');
    submitSpotBtn.addEventListener('click', () => {
        alert('Redirecting to spot submission form...');
    });

    // Newsletter Form Submission
    const newsletterForm = document.getElementById('newsletterForm');
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const emailInput = newsletterForm.querySelector('input[type="email"]').value;
        alert(`Thank you for subscribing with: ${emailInput}`);
        newsletterForm.reset();
    });
});



const navItems = document.querySelectorAll('.nav-links a');

navItems.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); 
        
    
        navItems.forEach(item => item.classList.remove('active'));
        
        
        this.classList.add('active');
    });
});