const   commentsCount = document.querySelector('.comments').childElementCount,
        commentsDiv = document.querySelector('.comments');

console.log(commentsCount);

if(commentsCount > 3) {
   const newHTML = `
    <div id="read-more">
        <a href="contact.php">Показати більше</a>
        <img src="img/sm-srt.svg" alt="">
    </div>
    `;

    commentsDiv.insertAdjacentHTML('beforeend', newHTML);
}




