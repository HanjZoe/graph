
document.addEventListener('hide.toast', (e) => {
      console.log(e.detail.target);
    });
    
    document.querySelector('#add-toast').onclick = () => {
 
      /*
        title - название заголовка
        text - текст сообщения
        theme - тема
        autohide - нужно ли автоматически скрыть всплывающее сообщение через interval миллисекунд interval - количество миллисекунд через которые необходимо скрыть сообщение
      */
      new Toast({
        title: document.querySelector('[name="toast-title"]').value,
        text: document.querySelector('[name="toast-text"]').value,
        theme: 'danger',
        autohide: false,
      });
    }