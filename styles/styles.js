import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "*": {},
    "body": {
        "marginLeft": 0,
        "fontSize": 16
    },
    "main": {
        "marginTop": 500,
        "backgroundColor": "rgb(255, 255, 255, .05)"
    },
    "largeHeaderContainer": {
        "display": "flex",
        "width": 99.5 * vw,
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
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "flexFlow": "row nowrap",
        "justifyContent": "flex-start"
    },
    "secondaryMenu li": {
        "marginLeft": 30
    },
    "secondaryMenu li a": {
        "color": "rgb(60, 60, 60)",
        "textDecoration": "none",
        "fontFamily": "'Roboto Condensed', sans-serif"
    },
    "mainMenuContainer": {
        "width": 30 * vw
    },
    "mainMenu": {
        "display": "flex",
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "flexFlow": "row nowrap",
        "justifyContent": "flex-end"
    },
    "mainMenu li": {
        "marginRight": 20,
        "display": "inline"
    },
    "mainMenu li a": {
        "color": "rgb(60, 60, 60)",
        "textDecoration": "none",
        "fontFamily": "'Roboto Condensed', sans-serif",
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "borderRadius": 3,
        "border": "solid 0.5px rgb(60, 60, 60)",
        "backgroundColor": "rgb(238, 238, 238)"
    },
    "container": {
        "display": "inline-block",
        "position": "relative",
        "width": 99 * vw,
        "height": 50 * vw,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "menu li": {
        "display": "inline-block",
        "marginRight": 30,
        "paddingTop": 5,
        "paddingRight": 10,
        "paddingBottom": 5,
        "paddingLeft": 10,
        "borderRadius": 3,
        "backgroundColor": "rgb(219, 235, 241)",
        "listStyle": "none"
    },
    "menu li a": {
        "textDecoration": "none"
    },
    "containerDos": {
        "display": "block",
        "width": 99 * vw,
        "borderRadius": "0 25px"
    },
    "containerDos span": {
        "color": "red",
        "fontSize": 1.5,
        "verticalAlign": "middle"
    },
    "motto": {
        "fontFamily": "'Bubbler One', sans-serif",
        "color": "rgb(0, 7, 155)",
        "zIndex": 1,
        "position": "absolute",
        "top": 200,
        "width": 99 * vw,
        "textAlign": "center",
        "fontSize": 2.5
    },
    "mainSearch": {
        "zIndex": 1,
        "display": "block",
        "position": "absolute",
        "top": 655,
        "width": 40 * vw,
        "marginTop": 0,
        "marginRight": 28 * vw,
        "marginBottom": 0,
        "marginLeft": 28 * vw,
        "paddingTop": 15,
        "paddingRight": 15,
        "paddingBottom": 15,
        "paddingLeft": 15,
        "border": "solid blue 1px",
        "borderRadius": 3,
        "backgroundColor": "rgba(255,255,255,0.75)",
        "textAlign": "center"
    },
    "banner": {
        "zIndex": 0,
        "width": 99 * vw,
        "borderRadius": "0 25px"
    },
    "infographs": {
        "display": "flex",
        "width": 99 * vw,
        "height": "margin:0 auto",
        "borderRadius": "25px 0",
        "backgroundColor": "rgba(151, 207, 153, 0.63)",
        "alignItems": "center",
        "flexDirection": "row",
        "flexWrap": "wrap",
        "justifyContent": "space-between"
    },
    "infographOne": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 35,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "infographTwo": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 35,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "infographThree": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 35,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "infoGraphImg": {},
    "userStories": {
        "display": "flex",
        "width": 99 * vw,
        "height": 300,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "borderRadius": "0 25px",
        "backgroundColor": "rgb(218, 161, 170)",
        "flexDirection": "row",
        "flexWrap": "nowrap",
        "justifyContent": "space-around"
    },
    "userStoryOne": {
        "width": 30 * vw,
        "marginLeft": 5,
        "color": "grey",
        "overflow": "hidden",
        "textAlign": "left",
        "textIndent": 5,
        "fontSize": 23
    },
    "userStoryTwo": {
        "width": 30 * vw,
        "marginLeft": 5,
        "color": "grey",
        "overflow": "hidden",
        "textAlign": "left",
        "textIndent": 5,
        "fontSize": 23
    },
    "userStoryThree": {
        "width": 30 * vw,
        "marginLeft": 5,
        "color": "grey",
        "overflow": "hidden",
        "textAlign": "left",
        "textIndent": 5,
        "fontSize": 23,
        "fontSizeAdjust": "auto"
    },
    "story": {
        "textAlign": "justify",
        "lineHeight": "150%"
    },
    "name": {
        "textAlign": "right",
        "fontStyle": "italic"
    },
    "stars": {
        "color": "rgb(255, 255, 255)",
        "textAlign": "right",
        "fontSize": 43
    },
    "map": {
        "width": 99 * vw,
        "height": 500,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "borderRadius": "0 25px",
        "backgroundColor": "rgb(252, 250, 187)"
    },
    "mapOne": {
        "display": "flex",
        "justifyContent": "center"
    },
    "bottomContainer": {
        "width": 99 * vw,
        "height": 200,
        "borderRadius": "0 25px",
        "backgroundColor": "rgb(187, 252, 209)"
    },
    "bottomContainerList": {
        "display": "flex"
    },
    "bottomList": {
        "alignItems": "center",
        "flex": "auto",
        "justifyContent": "space-between"
    },
    "li": {
        "alignItems": "center",
        "justifyContent": "space-between",
        "lineHeight": "210%",
        "listStyleType": "none"
    },
    "footer": {
        "width": 99 * vw,
        "height": 100,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "color": "white",
        "borderRadius": "25px 25px 0 0",
        "backgroundColor": "rgb(31, 41, 133)",
        "textAlign": "center"
    },
    "footer p": {
        "position": "relative",
        "top": 50
    }
});