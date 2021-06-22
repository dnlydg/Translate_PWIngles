import { StyleSheet } from 'react-native';

export const styles = StyleSheet.create({

    header: {
        paddingLeft: 2,
        backgroundColor: '#38364a',
        height: 50,
        justifyContent: 'flex-start',
        flexDirection: 'row',
        alignItems: 'center'

    },
    iconeMenu: {

        width: 80,

    },

    logo: {
        fontSize: 22,
        justifyContent: 'center',
        fontWeight: 'bold',
        paddingLeft: '10px',
        color: '#f38900',

    },

    sectionTop: {

        flex: 1,
        width: '100%',
        height: '150px',
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#38364a',
        borderBottomLeftRadius: 15,
        borderBottomRightRadius: 15,
        padding: 50
    },

    slogan: {
        color: '#f38900',
        fontSize: 18,
        fontWeight: 'bold',
        paddingBottom: '10px',
    },

    container: {


    },

    cardBody: {
        margin: '1%',
        backgroundColor: '#f3f3f3',
        border: "1px solid #808080",
        borderBottomLeftRadius: 15,
        borderBottomRightRadius: 15,
        width: '98%',
        padding: 50
    },

    tituloCard: {
        color: '#f38900',
        fontSize: 18,
        paddingBottom: "10px",
    },

    textoCard: {
        fontSize: 15,

    },

    background: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#38364a'
    },
    topLogin: {
        flex: 1,
        justifyContent: 'center',

    },
    topTitulo: {
        fontSize: 38,
        fontWeight: 'bold',
        color: '#f38900',
    },
    mainLogin: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        width: '90%',


    },
    textArea: {
        color: '#222',
        backgroundColor: '#fff',
        width: '90%',
        fontSize: 17,
        marginBottom: 15,
        borderRadius: 7,
        paddingBottom: 30,
        paddingLeft: 10,
        paddingRight: 10,
        paddingTop: 10,
    },
    input: {
        color: '#222',
        backgroundColor: '#fff',
        width: '90%',
        fontSize: 17,
        marginBottom: 15,
        borderRadius: 7,
        padding: 10,


    },

    btnSubmit: {

        backgroundColor: '#f38900',
        width: '90%',
        height: 75,
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 7,



    },

    submiText: {
        color: '#fff',
        fontSize: 18,
    }

})