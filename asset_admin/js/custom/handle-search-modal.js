
sendQuery = (route, query) => $.ajax({
    url: `${route}`,
    method: 'POST',
    data:{
        _token: $('meta[name="_token"]').attr('content'),
        query: query
    }
});

// isInResult = false => mouse is out of search result
// isInResult = true => mouse is in search result
handleMouseOver =(id, isInResult) =>{
    $(`#${id}`).on('mouseover',()=>{
        isInResult = true;
        console.log(isInResult);
    });};
handleMouseLeave = (id, isInResult) => {
    $(`#${id}`).on('mouseleave',()=>{
        isInResult = false;
        console.log(isInResult);
    });
};

handleSearchModal = (id, isInResult) => {
    if(!isInResult){
        console.log('mousedown ' + isInResult);
        $(`.modal-content`).on('mousedown',()=>{
            console.log('mousedown ' + isInResult);
            displaySuggestSearch(id,'');
        });
    }

};
