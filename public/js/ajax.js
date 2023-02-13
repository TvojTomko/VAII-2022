async function filterShows(search){
     let response;
     response = await fetch("?c=show&a=getJson");
     let shows = await response.json();
     let filteredShows = shows.filter( shows=>shows.title.toLowerCase().includes(search.toLowerCase()));
     displayShows(filteredShows);
 }


function displayShows(filtredProducts) {
    document.getElementById('show').innerHTML = '';

    for(let shows of filtredProducts){
        const showElement = document.createElement('show.title');
        //showElement.classList.add("login");
        //showElement.classList.add("card");
        showElement.innerHTML = `    
                    <div class="shows">
                    <img alt="fci" src="/checkpoint2/public/images/FCI_logo.png" class="logo">
                    <label class="shows_text">Title:</label> ${shows.title}
                    <br>
                    <label class="shows_text">Location:</label> ${shows.location}
                    <br>
                    <label class="shows_text">Date:</label> ${shows.date}
                        <a href="?c=Show&a=editshow&id=${shows.id}" class="admin_show_button_edit right">Edit</a>
                        <a href="#" class="admin_show_button_delete right" onclick="return confirmDeleteShow(${shows.id})">Delete</a>
                    </div>`;

        document.getElementById('show').appendChild(showElement);
    }

}

window.onload = function(){filterShows("")};