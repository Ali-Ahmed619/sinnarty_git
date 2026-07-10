 const methods = document.querySelectorAll('.method-option');
  const cardFields = document.getElementById('cardFields');
  const cardInputs = cardFields.querySelectorAll('input');

  methods.forEach(m => {
    m.addEventListener('click', () => {
      methods.forEach(x => x.classList.remove('selected'));
      m.classList.add('selected');
      m.querySelector('input').checked = true;

      if (m.dataset.method === 'cod') {
        cardFields.classList.add('hidden');
        cardInputs.forEach(i => i.removeAttribute('required'));
      } else {
        cardFields.classList.remove('hidden');
        cardInputs.forEach(i => i.setAttribute('required', ''));
      }
    });
  });