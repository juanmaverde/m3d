import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "*": {},
    "body": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "fontSize": 16
    },
    "main": {},
    "largeHeaderContainer": {
        "zIndex": 100,
        "display": "flex",
        "width": 99.8 * vw,
        "height": 75,
        "flexFlow": "row nowrap",
        "justifyContent": "space-around"
    },
    "logoContainer": {
        "display": "flex",
        "width": 10 * vw,
        "flexFlow": "nowrap row",
        "justifyContent": "center"
    },
    "logo": {},
    "secondaryMenuContainer": {},
    "secondaryMenu": {
        "display": "flex",
        "width": 55 * vw,
        "marginTop": 25,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "flexFlow": "row nowrap",
        "justifyContent": "flex-start"
    },
    "secondaryMenu li": {
        "marginLeft": 30,
        "listStyleType": "none"
    },
    "secondaryMenu li a": {
        "color": "rgb(60, 60, 60)",
        "textDecoration": "none",
        "fontFamily": "'Roboto Condensed',                    sans-serif"
    },
    "mainMenuContainer": {
        "width": 30 * vw
    },
    "mainMenu": {
        "display": "flex",
        "marginTop": 25,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "flexFlow": "row nowrap",
        "justifyContent": "flex-end"
    },
    "mainMenu li": {
        "display": "inline",
        "marginRight": 20
    },
    "mainMenu li a": {
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "color": "rgb(60, 60, 60)",
        "border": "solid 0.5px rgb(60, 60, 60)",
        "borderRadius": 9,
        "backgroundColor": "rgb(238, 238, 238)",
        "boxShadow": "0 2px 0 rgba(19,25,40,0.1)",
        "textDecoration": "none",
        "fontFamily": "'Roboto Condensed',                     sans-serif"
    },
    "mainMenu li amainMenuFavorite": {
        "paddingTop": 7,
        "paddingRight": 7,
        "paddingBottom": 7,
        "paddingLeft": 7,
        "color": "white",
        "borderColor": "#ed565c",
        "backgroundColor": "#ed565c",
        "boxShadow": "3px 3px 3px rgba(19,25,40,0.2)"
    },
    "mainScreenContainer": {
        "position": "relative",
        "width": 99.8 * vw,
        "height": 350
    },
    "mainScreenContainer h1": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 10 * vh,
        "color": "rgb(88, 88, 88)",
        "textAlign": "center",
        "fontFamily": "'Quicksand',                sans-serif",
        "fontSize": 3.5
    },
    "mainScreenContainer h1 strong": {
        "color": "rgb(88, 88, 88)"
    },
    "mainScreenContainer h1 strong span": {
        "color": "rgb(20, 13, 101)",
        "verticalAlign": "middle",
        "fontSize": 1.5
    },
    "mainScreenContainer h2": {
        "color": "#52baaf",
        "textAlign": "center",
        "fontFamily": "'Bubbler One',                sans-serif",
        "fontSize": 2
    },
    "mottoContainer": {
        "width": 90 * vw,
        "height": 250,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "primMotto": {
        "color": "#52baaf",
        "verticalAlign": "middle",
        "fontSize": 1.1
    },
    "secondMotto": {
        "color": "#3b2786",
        "verticalAlign": "top",
        "fontFamily": "'Bubbler One',                   sans-serif",
        "fontSize": 1.5
    },
    "tercMotto": {
        "color": "#1686ea"
    },
    "searchFieldContainer": {
        "width": 50 * vw,
        "height": 15 * vh,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "searchField": {
        "boxSizing": "border-box",
        "width": 50 * vw,
        "marginTop": 30,
        "paddingTop": 12,
        "paddingRight": 20,
        "paddingBottom": 12,
        "paddingLeft": 20,
        "border": "2px solid #ccc",
        "borderRadius": 4,
        "backgroundColor": "white",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "10px 10px",
        "boxShadow": "7px 7px 7px rgba(19,25,40,0.2)",
        "fontSize": 15
    },
    "infogContainer": {
        "display": "flex",
        "width": 99.9 * vw,
        "height": 55 * vh,
        "marginTop": 50,
        "backgroundColor": "RGBA(188, 189, 189, .35)",
        "alignItems": "center",
        "flexWrap": "wrap",
        "justifyContent": "space-around"
    },
    "infog-1": {
        "paddingTop": 10,
        "paddingRight": 25,
        "paddingBottom": 10,
        "paddingLeft": 25,
        "borderRadius": 15,
        "backgroundColor": "RGBA(254, 254, 254, 1.00)"
    },
    "infog-2": {
        "paddingTop": 10,
        "paddingRight": 25,
        "paddingBottom": 10,
        "paddingLeft": 25,
        "borderRadius": 15,
        "backgroundColor": "RGBA(178, 222, 218, 1.00)"
    },
    "infog-3": {
        "paddingTop": 10,
        "paddingRight": 25,
        "paddingBottom": 10,
        "paddingLeft": 25,
        "borderRadius": 15,
        "backgroundColor": "RGBA(188, 189, 189, 1.00)"
    },
    "infog-4": {
        "paddingTop": 10,
        "paddingRight": 25,
        "paddingBottom": 10,
        "paddingLeft": 25,
        "borderRadius": 15,
        "backgroundColor": "RGBA(237, 86, 92, 1.00)"
    },
    "infoP": {
        "textAlign": "center",
        "fontFamily": "'Bubbler One',                sans-serif",
        "fontSize": 1.1
    },
    "infoDescContainer": {
        "display": "flex",
        "width": 99.9 * vw,
        "height": 150,
        "textAlign": "center",
        "alignItems": "baseline",
        "flexFlow": "nowrap row",
        "flexWrap": "wrap",
        "justifyContent": "space-around"
    },
    "infoDesc": {
        "width": 225,
        "fontFamily": "'Bubbler One',                sans-serif"
    },
    "footerContainer": {
        "width": 99.9 * vw,
        "height": 30 * vh,
        "backgroundColor": "#05407c"
    },
    "mainContactFormContainer": {
        "width": 99.9 * vw,
        "height": 550,
        "backgroundColor": "#ebeded"
    },
    "FAQsLinkContainer": {
        "position": "relative",
        "top": 50,
        "width": 600,
        "height": 50,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "textAlign": "center",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "FAQsLinkContainer a": {
        "color": "#757575",
        "textDecoration": "none",
        "fontSize": 1.2
    },
    "FAQsLinkContainer a span": {
        "color": "#ed565c",
        "verticalAlign": "baseline",
        "fontSize": 1.25
    },
    "contactFormContainer": {
        "position": "relative",
        "top": 50,
        "width": 50 * vw,
        "height": 50 * vh,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "contactFormContainerParagraph": {
        "marginLeft": 20,
        "color": "#757575",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "contactForm": {
        "display": "flex",
        "alignItems": "center",
        "flexFlow": "nowrap column"
    },
    "topicDropDown": {
        "width": 20 * vw,
        "marginBottom": 15
    },
    "textArea": {
        "width": 45 * vw,
        "marginBottom": 25
    },
    "submitButton": {
        "marginBottom": 20
    },
    "phoneContact": {
        "marginBottom": 15,
        "textDecoration": "none"
    },
    "phoneContact span": {
        "color": "#757575",
        "textDecoration": "none"
    },
    "emailContact": {
        "color": "#757575",
        "textDecoration": "none"
    },
    "socialNetworks": {
        "textAlign": "center"
    },
    "socialNetworksIcons": {
        "display": "flex",
        "marginTop": 0,
        "marginRight": 100,
        "marginBottom": 0,
        "marginLeft": 100,
        "alignItems": "center",
        "flexFlow": "nowrap row",
        "justifyContent": "space-around"
    },
    "facebookLink": {},
    "twitterLink": {},
    "dashboardContainer": {
        "display": "flex",
        "width": 60 * vw,
        "height": 300,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "backgroundColor": "rgb(182, 190, 194)",
        "alignItems": "center",
        "flexFlow": "row wrap",
        "justifyContent": "space-around"
    },
    "aboutUs": {
        "width": 150,
        "height": 150,
        "borderRadius": 5,
        "backgroundColor": "#ed565c"
    },
    "aboutUs p": {
        "textAlign": "center",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "dataPrivacy": {
        "width": 150,
        "height": 150,
        "borderRadius": 5,
        "backgroundColor": "#ed565c",
        "textAlign": "center",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "verifiedProf": {
        "width": 150,
        "height": 150,
        "borderRadius": 5,
        "backgroundColor": "#ed565c",
        "textAlign": "center",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "frequentQuestions": {
        "color": "#ed565c",
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "questionsAndAnswers": {
        "fontFamily": "'Quicksand',                sans-serif"
    },
    "questionsAndAnswers ul li": {
        "color": "#05407c"
    },
    "questionsAndAnswers ul p": {
        "color": "#757575"
    },
    "loginRegisterContainer": {
        "width": 99.9 * vw,
        "height": 550,
        "marginTop": 50
    },
    "loginContainer": {
        "width": 40 * vw,
        "height": 200,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "borderRadius": 7,
        "backgroundColor": "#009688"
    },
    "loginContainer input": {
        "width": 25 * vw,
        "height": 25,
        "marginTop": 20,
        "borderRadius": 5,
        "marginLeft": 95
    },
    "loginForm": {},
    "submit": {
        "width": 100
    },
    "registerContainer": {
        "width": 40 * vw,
        "height": 100,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "borderRadius": 7,
        "backgroundColor": "RGBA(237, 86, 92, 0.75)"
    },
    "registerContainer p": {
        "position": "relative",
        "fontFamily": "'Quicksand', sans-serif",
        "left": 100,
        "marginTop": 20
    },
    "registerForm": {
        "marginLeft": 200
    },
    "registerButton": {}
});