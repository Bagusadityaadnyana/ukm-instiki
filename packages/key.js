
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.masuk-button');
    const modal = document.getElementById('enrollmentKeyModal');
    const enrollmentKeyInput = document.getElementById('enrollmentKeyInput');
    const submitButton = document.getElementById('submitEnrollmentKey');
    
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const ukm = button.getAttribute('data-ukm');
            // Open the modal
            modal.classList.remove('hidden');
            // Store the UKM name in the input's dataset
            enrollmentKeyInput.dataset.ukm = ukm;
        });
    });

    submitButton.addEventListener('click', () => {
        const key = enrollmentKeyInput.value;
        const ukm = enrollmentKeyInput.dataset.ukm;
        
        // Here you would typically send the key to the server for validation
        // For demonstration, let's assume the key is always correct

        if (key) {
            localStorage.setItem(`enrollmentKey_${ukm}`, key);
            modal.classList.add('hidden');
            enrollmentKeyInput.value = '';
            alert(`Enrollment Key for ${ukm} has been set!`);
            // Redirect to the respective UKM page
            window.location.href = `ukm-instiki/index.html`;
        } else {
            alert('Please enter a valid enrollment key.');
        }
    });

    // Close the modal when clicking outside of it
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
});