import React from "react";
import Login from "./Login";
import Menu from "./Menu";
import Register from "./Register";
import Settings from "./Settings";
import {Routes, Route, Navigate} from "react-router-dom";


function Main(){
    return(
        <Routes>
            <Route path="topicos23/public/" element={<Menu />} >
                <Route path="login" element={<Login />} />
                <Route path="register" element={<Register />} />
                <Route path="settings" element={<Settings />} />
                <Route path="*" element={<Navigate replace to="/" />} />
                
            </Route>
        </Routes>

    );
}

export default Main;
