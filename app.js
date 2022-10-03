const observer = new IntersectionObserver ( ( entries ) => {
    entries.forEach ( ( entry ) => {
        console.log(entry)
        if ( entry.isIntersecting ) {
            entry.target.classList.add ('show');
            }else{
                entry.target.classList.remove('show');
            }
         });
});

const hiddenElements = document.querySelectorAll('.hidenn');
hiddenElements.forEach((el) => observer.observe(el));


const observerr = new IntersectionObserver ( ( entries ) => {
    entries.forEach ( ( entry ) => {
        console.log(entry)
        if ( entry.isIntersecting ) {
            entry.target.classList.add ('showw');
            }else{
                entry.target.classList.remove('showw');
            }
         });
});

const hiddenElementss = document.querySelectorAll('.section2animation');
hiddenElementss.forEach((el) => observerr.observe(el));
