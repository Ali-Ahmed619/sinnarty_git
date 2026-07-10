document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('subscribe-form');
    const emailInput = document.getElementById('email-input');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const emailValue = emailInput.value.trim();
        
        if (emailValue) {
            console.log(`Subscribed with: ${emailValue}`);
            
            // إعادة تعيين الحقل بعد الإرسال
            form.reset();
        }
    });
});