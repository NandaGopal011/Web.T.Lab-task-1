function analyze() {
    var text = document.getElementById("text").value;

    if (text.trim() == "") {
        document.getElementById("result").innerHTML = "Please enter text!";
        return;
    }

    var charCount = text.length;

    var words = text.trim().split(/\s+/);
    var wordCount = words.length;

    var reversed = text.split("").reverse().join("");

    document.getElementById("result").innerHTML =
        "Characters: " + charCount + "<br>" +
        "Words: " + wordCount + "<br>" +
        "Reversed: " + reversed;
}