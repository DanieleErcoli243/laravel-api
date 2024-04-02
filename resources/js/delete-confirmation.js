const deleteForms = document.querySelectorAll('.deleting-form');
deleteForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();

        const hasConfirmed = confirm('Sei proprio sicuro di voler eliminare questo elemento?');
        if (hasConfirmed) form.submit();
    })

})