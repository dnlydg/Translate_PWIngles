import { createDrawerNavigator } from '@react-navigation/drawer';
import { NavigationContainer } from '@react-navigation/native';
import * as React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import Home from './components/Home';
import LoginAdm from './components/LoginAdm';
import HomeAdm from './componentsRestritos/HomeAdm';
import AlterarTermo from './componentsRestritos/AlterarTermo';
import CadastrarTermo from './componentsRestritos/CadastrarTermo';



const Drawer = createDrawerNavigator()

export default function App() {
    return (
        <NavigationContainer>
            <Drawer.Navigator initialRouteName="Home">
                <Drawer.Screen name="Home" component={Home} />
                <Drawer.Screen name="Entrar Como Adm" component={LoginAdm} />
                <Drawer.Screen name="ADM" component={HomeAdm} />
                <Drawer.Screen name="Alterar Termo" component={AlterarTermo} />
                <Drawer.Screen name="Cadastrar Termo" component={CadastrarTermo} />
            </Drawer.Navigator>
        </NavigationContainer>
    )
}