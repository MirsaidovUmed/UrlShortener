let original_link = document.getElementById("original_link");
let generate = document.getElementById("generate");
let shorten_link = document.getElementById("shorten_link");
let copy = document.getElementById("copy");

//     REGISTER   //// / // / / / / / / 
document.getElementById("registration-form").addEventListener("submit", function(e) {
    e.preventDefault();
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
 
    // Find error password
    if (password !== confirmPassword) {
       alert("Passwords do not match");
       return;
    }
 
    // Send form
    alert("Registration successful!");
    document.getElementById("registration-form").reset();
 }); 
let register = document.querySelector(".register")
let modal1 = document.querySelector(".modal1")
let close = document.querySelector(".close")
register.onclick = () =>
{
    modal1.showModal()
    close.onclick = () =>
    {
        modal1.close()
    }
}

generate.addEventListener("click",()=>
{
    let url = original_link.value;
    fetch(`https://api.shrtco.de/v2/shorten?url=${url}/very/long/link.html`)
    .then((resp)=>resp.json())
    .then((value)=>{
        shorten_link.value = value.result.short_link;
    })
    .catch((error)=>
    {
        shorten_link.value = "Something went wrong";
    });
});

copy.addEventListener("click",()=>
{
    navigator.clipboard.writeText(shorten_link.value);
    copy.innerHTML = "Copied";
    setTimeout(()=>
    {
    copy.innerHTML = "Copy";
    },1000)
})

document.getElementById('generate').addEventListener('click', generateShortLink);
document.getElementById('copy').addEventListener('click', copyShortLink);
document.getElementById('link-form').addEventListener('submit', saveLink);

function generateShortLink() {
    const originalLinkInput = document.getElementById('original_link');
    const shortenLinkInput = document.getElementById('shorten_link');
    const generatedShortLink = 'https://example.com/abcd';
    shortenLinkInput.value = generatedShortLink;
}
function copyShortLink() {
    const shortenLinkInput = document.getElementById('shorten_link');
    shortenLinkInput.select();
    document.execCommand('copy');
}
function saveLink(event) {
    event.preventDefault();
    const originalLinkInput = document.getElementById('original-link');
    const shortenLinkInput = document.getElementById('shorten-link');
    const originalLink = originalLinkInput.value;
    const shortenLink = shortenLinkInput.value;

    alert('Link saved!');
}