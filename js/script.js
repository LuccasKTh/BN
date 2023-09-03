var color = document.getElementById("text_color_editing");
var textSize = document.getElementById("fontSize");
var textFont = document.getElementById("textFont");
var fontComfortaa = document.getElementById("fontComfortaa");
var fontArial = document.getElementById("fontArial");
let btnSize_more = document.getElementById('btnSize_more');
let btnSize_less = document.getElementById('btnSize_less');
let textarea = document.querySelector('textarea');

function textname(){
    document.getElementsByTagName('title') = document.getElementById('textname').value;
}

color.addEventListener("change", function() {
    document.getElementById("text_editing").style.color = color.value;
});

function textBold(){  
    const bold = document.getElementById("boldinfo");  
    if(bold.value !== 'true'){
        document.getElementById("text_editing").style.fontWeight = 'bold';
        bold.value = 'true';
    } else {
        document.getElementById("text_editing").style.fontWeight = 'normal';
        bold.value = 'false';
    }
}

function textItalic(){
    const italic = document.getElementById("italicinfo");  
    if(italic.value !== 'true'){
        document.getElementById("text_editing").style.fontStyle = 'italic';
        italic.value = 'true';
    } else {
        document.getElementById("text_editing").style.fontStyle = 'normal';
        italic.value = 'false';
    }
}

function textUnderline(){
    const underline = document.getElementById("underlineinfo");  
    if(underline.value !== 'true'){
        document.getElementById("text_editing").style.textDecoration = 'underline';
        underline.value = 'true';
    } else {
        document.getElementById("text_editing").style.textDecoration = 'none';
        underline.value = 'false';
    }
}

let getfontsize = (el) => {
    let size = window.getComputedStyle(el, null).getPropertyValue('font-size');
    return parseFloat(size);
}

btnSize_more.addEventListener('click', () => {
    textarea.style.fontSize = (getfontsize(textarea) + 1) + 'px';
    document.getElementById("fontSize").value++;
});

btnSize_less.addEventListener('click', () => {
    textarea.style.fontSize = (getfontsize(textarea) - 1) + 'px';
    document.getElementById("fontSize").value--;
});

var selectFontStyle = function(font) {
    document.getElementById("text_editing").style.fontFamily = font.value;
    document.getElementById("input_font").style.fontFamily = font.value;
};

document.addEventListener("DOMContentLoaded", function(e) {
    const bold = document.getElementById("boldinfo");  
    if(bold.value == 'true'){
        document.getElementById("text_editing").style.fontWeight = 'bold';
        bold.value = 'true';
    } else {
        document.getElementById("text_editing").style.fontWeight = 'normal';
        bold.value = 'false';
    }

    const italic = document.getElementById("italicinfo");  
    if(italic.value == 'true'){
        document.getElementById("text_editing").style.fontStyle = 'italic';
        italic.value = 'true';
    } else {
        document.getElementById("text_editing").style.fontStyle = 'normal';
        italic.value = 'false';
    }

    const underline = document.getElementById("underlineinfo");  
    if(underline.value == 'true'){
        document.getElementById("text_editing").style.textDecoration = 'underline';
        underline.value = 'true';
    } else {
        document.getElementById("text_editing").style.textDecoration = 'none';
        underline.value = 'false';
    }

    const fontSize = document.getElementById("fontSize").value;
    document.getElementById("text_editing").style.fontSize = fontSize + 'px';

    document.getElementById("textname").style.display = "block";
});

