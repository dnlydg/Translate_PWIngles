import React, { useState, useEffect } from 'react';
import { Text, SafeAreaView, View, KeyboardAvoidingView, Animated, TouchableOpacity, TextInput } from 'react-native';
import HomeAdm from '../componentsRestritos/HomeAdm';
import { styles } from '../style/global';


function LoginAdm({ navigation }) {
    const [offset] = useState(new Animated.ValueXY({ x: 0, y: 95 }))
    const [opacity] = useState(new Animated.Value(0))

    useEffect(() => {
        Animated.parallel([
            Animated.spring(offset.y, {
                toValue: 0,
                speed: 4,
                bounciness: 0
            }),
            Animated.timing(opacity, {
                toValue: 1,
                duration: 200,
            })
        ]).start();

    }, [])

    return (
        <KeyboardAvoidingView style={styles.background}>
            <SafeAreaView>
                <View style={styles.header}>
                    <TouchableOpacity onPress={() => navigation.toggleDrawer()}>
                        <Text style={styles.submiText}>Menu</Text>
                    </TouchableOpacity>
                    <Text style={styles.logo}>Translate</Text>

                </View>
            </SafeAreaView>
            <View style={styles.topLogin}>
                <Text style={styles.topTitulo}>Alterar Termo</Text>
            </View>
            <Animated.View
                style={[
                    styles.mainLogin,
                    {
                        opacity: opacity,
                        transform: [
                            { translateY: offset.y }
                        ]
                    }
                ]}
            >
                <TextInput
                    style={styles.input}
                    placeholder='Nome do Termo'
                    autoCorrect={false}
                    onChangeText={() => { }}

                />
                <TextInput
                    style={styles.textArea}
                    placeholder='Descrição'
                    autoCorrect={false}
                    onChangeText={() => { }}

                />
                <TouchableOpacity style={styles.btnSubmit} >
                    <Text style={styles.submiText}>Entrar</Text>
                </TouchableOpacity>

            </Animated.View>
        </KeyboardAvoidingView >
    )
}



export default LoginAdm;