window.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.item')
    document.querySelector(".filter").addEventListener('click', event =>
    {
       if (event.target.tagName === 'LI')
       {
           let filter = event.target.dataset['color'];
           items.forEach(item => {
               item.classList.remove('hide');
           })
           if (filter === 'no color') return false;
           items.forEach(item => {
               if (!item.classList.contains(filter))
               {
                   item.classList.add('hide');
               }
           })

       }
    });
});
