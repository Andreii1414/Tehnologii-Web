let index = 1;
        showSlide(index);

        function prev(){
            showSlide(index -= 1);
        }

        function next(){
            showSlide(index += 1);
        }

        function showSlide(n){
            const slideList = document.getElementsByClassName("slide");

            if(n > slideList.length)
                index = 1;

            if(n < 1)
                index = slideList.length;

            for(let i = 0; i < slideList.length; i++)
                slideList[i].style.display = "none";

            slideList[index - 1].style.display = "block";

            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(index == 1)
                prevBtn.style.display = "none";
            else prevBtn.style.display = "block";

            if(index == slideList.length)
                nextBtn.style.display = "none";
            else nextBtn.style.display = "block";

        }
        
        document.querySelector(".prev").addEventListener("click", prev);
        document.querySelector(".next").addEventListener("click", next);