$(document).ready(function(){
    $(document).on('click', '.js-load-more', function(){

        const   targetContainer = $(this).parent().prev().first(),
                containerClass = targetContainer.attr('class'), //  Контейнер, в котором хранятся элементы
                url =  $(this).attr('data-url');                //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){
                    //  Удаляем старую навигацию
                    targetContainer.next('.page-nav-ajax').remove();
                    const   elements = $(data).find('[class='+containerClass+']').children(),    //  Ищем элементы
                            pagination = $(data).find('[class='+containerClass+']').next('.page-nav-ajax');                             //  Ищем навигацию

                    targetContainer.append(elements);                                            //  Добавляем посты в конец контейнера
                    targetContainer.after(pagination);                                           //  добавляем навигацию следом
                }
            })
        }
    });
});