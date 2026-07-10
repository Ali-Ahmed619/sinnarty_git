const saveButton = document.getElementById('saveBtn');

saveButton.addEventListener('click', function(event) {
    event.preventDefault();
    
    const originalText = saveButton.innerHTML;
    saveButton.innerHTML = '<i class="fas fa-check"></i> Saved!';
    saveButton.style.backgroundColor = '#28a745'; 
    
    setTimeout(() => {
        saveButton.innerHTML = originalText;
        saveButton.style.backgroundColor = '#005f8f';
    }, 2000);
});
const fullNameInput = document.getElementById('fullNameInput');
const displayName = document.getElementById('displayName');

fullNameInput.addEventListener('input', function() {
    if (this.value.trim() === '') {
    
        displayName.textContent = 'Name...'; 
    } else {
        displayName.textContent = this.value;
    }
});