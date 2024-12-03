document.addEventListener('DOMContentLoaded', function() {
    const tabla = document.getElementById('filesTable');
    
    if (tabla) {
        tabla.addEventListener('click', function(e) {
            if (e.target.classList.contains('borrar')) {
                e.preventDefault();
                
                if (confirm('¿Está seguro de eliminar este archivo?')) {
                    const form = document.getElementById('formDelete');
                    form.action = e.target.dataset.href;
                    form.submit();
                }
            }
        });
    }
});