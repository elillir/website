import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservation-form');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            const reservationTime = new Date(document.getElementById('reservation_time').value);
            const now = new Date();

            if (reservationTime < now) {
                e.preventDefault();
                alert('Выберите будущую дату и время для бронирования.');
            }
        });
    }
});
