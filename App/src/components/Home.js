import React from 'react';
import { Button, SafeAreaView, Text, View, TouchableOpacity, ScrollView } from 'react-native';
import { SearchBar } from 'react-native-elements';
import { styles } from '../style/global';



export default function Home({ navigation }) {

    /*updateSearch = search => {}        
        this.setState({ search });*/
    return (
        <SafeAreaView>
            <View style={styles.header}>
                <TouchableOpacity onPress={() => navigation.toggleDrawer()}>
                    <Text style={styles.submiText}>Menu</Text>
                </TouchableOpacity>
                <Text style={styles.logo}>Translate</Text>

            </View>

            <View style={styles.sectionTop}>

                <Text style={styles.slogan}>Seu Tradutor de Termos, Inteligente</Text>
                /*AREA DA CAIXA DE PESQUISA*/
            </View>
            <ScrollView>
                <View style={styles.container}>

                    <View style={styles.cardBody}>
                        <Text style={styles.tituloCard}>Nome do Termo</Text>
                        <Text style={styles.textoCard}>Termo Tal</Text>
                        <Text style={styles.textoCard}>Descrição do card</Text>

                    </View>
                </View>
            </ScrollView>
        </SafeAreaView>
    )
}





