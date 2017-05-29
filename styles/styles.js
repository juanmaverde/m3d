import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "*": {},
    "body": {
        "marginTop": 10,
        "marginRight": 10,
        "marginBottom": 10,
        "marginLeft": 10,
        "fontSize": 16
    },
    "main": {
        "backgroundColor": "rgb(235, 235, 235)"
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
    "containerUno": {
        "display": "inline-block",
        "width": 99 * vw,
        "height": 100,
        "borderRadius": "25px 0px",
        "backgroundColor": "rgba(29, 42, 221, 0.5)"
    },
    "containerLogo": {
        "position": "absolute",
        "top": 20,
        "left": 15
    },
    "menu": {
        "position": "absolute",
        "top": 25,
        "right": 25,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "menu li": {
        "display": "inline-block",
        "marginRight": 30,
        "paddingTop": 5,
        "paddingRight": 10,
        "paddingBottom": 5,
        "paddingLeft": 10,
        "borderRadius": 3,
        "backgroundColor": "rgb(23, 165, 222)",
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
    "motto": {
        "zIndex": 1,
        "position": "absolute",
        "top": 200,
        "width": 99 * vw,
        "textAlign": "center",
        "fontSize": 1.5
    },
    "mainSearch": {
        "zIndex": 1,
        "display": "block",
        "position": "absolute",
        "top": 350,
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
        "flexDirection": "row",
        "flexWrap": "nowrap",
        "justifyContent": "space-around"
    },
    "infographOne": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 10,
        "marginRight": "auto",
        "marginBottom": 10,
        "marginLeft": "auto",
        "overflow": "hidden",
        "border": "solid blue 1px"
    },
    "infographTwo": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 10,
        "marginRight": "auto",
        "marginBottom": 10,
        "marginLeft": "auto",
        "overflow": "hidden",
        "border": "solid blue 1px"
    },
    "infographThree": {
        "position": "relative",
        "width": 300,
        "height": 300,
        "marginTop": 10,
        "marginRight": "auto",
        "marginBottom": 10,
        "marginLeft": "auto",
        "overflow": "hidden",
        "border": "solid blue 1px"
    },
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
        "fontSize": 13
    },
    "userStoryTwo": {
        "width": 30 * vw,
        "marginLeft": 5,
        "color": "grey",
        "overflow": "hidden",
        "textAlign": "left",
        "textIndent": 5,
        "fontSize": 13
    },
    "userStoryThree": {
        "width": 30 * vw,
        "marginLeft": 5,
        "color": "grey",
        "overflow": "hidden",
        "textAlign": "left",
        "textIndent": 5,
        "fontSize": 13,
        "fontSizeAdjust": "auto"
    },
    "map": {
        "display": "flex",
        "width": 99 * vw,
        "height": 600,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "borderRadius": "0 25px",
        "backgroundColor": "rgb(252, 250, 187)"
    },
    "mapOne": {
        "justifyContent": "center",
        "alignItems": "center"
    },
    "bottomContainer": {
        "border": "solid 1px blue",
        "display": "flex",
        "width": 99 * vw,
        "height": 300,
        "borderRadius": "0 25px",
        "backgroundColor": "rgb(187, 252, 209)"
    },
    "bottomContainerList": {
        "border": "solid 1px blue",
        "flexDirection": "column",
        "flexWrap": "wrap",
        "justifyContent": "space-between"
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
    }
});