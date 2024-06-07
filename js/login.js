
        // Function to show popup
        function showPopup() {
            document.getElementById('loginOverlay').style.display = 'flex';
        }

        // Function to close popup
        function closePopup() {
            document.getElementById('loginOverlay').style.display = 'none';
        }

        // Get all login buttons
        const loginBtns = document.querySelectorAll('.login-btn');

        // Add click event listener to each login button
        loginBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                showPopup();
            });
        });