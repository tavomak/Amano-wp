<?php
function pickupLocation_enqueue() {

    if ( class_exists( 'WooCommerce' ) ) {
        if (is_checkout()) {
            $datos['Amazonas'] = array(
                'Puerto Ayacucho' => array(
                    'Zoom Puerto Ayacucho' =>'Av. Rio Negro C.C. Juncosa local 2-a.'
                    )
            );
            $datos['Anzoátegui'] = array(
                'Puerto la Cruz' => array(
                    'Zoom Taquilla Libertad' => 'Calle Libertad, cruce con calle Freites, C.C. Libertad-local 108.',
                    'Aliado Zoom Estrada y Asociados' => 'Av. 5 de julio, edif. Los Angeles, p.b.',
                    'Zoom Taquilla Libertad' => 'C.C. Carabel calle las Flores con calle Guaraguao, pb local 2.'
                ),
                'El Tigre' => array(
                    'Zoom el tigre' => 'Av. Fco. De Miranda, C.C. Flamingo, pb. Locales a-07 y a-08, al lado de la alcaldia.',
                    'Aliado Zoom Inversiones 281004kp' => 'Av. Fco. De Miranda, C.C. Flamingo, pb. Locales a-07 y a-08, al lado de la alcaldia.',
                    'Aliado Zoom Print Solutions' => 'Sector norte El Tigre, av. Francisco de Miranda, C.C. Venezuela pb, local no 14.'
                ),
                'Barcelona' => array(
                    'Zoom barcelona' => 'Av. Intercomunal Jorge Rodriguez, C.C. Brisas de Neveri, local 04p, frente a la escuela de Ingenieria Ugma.',
                    'Aliado Zoom Audiobox Producciones c.a' => 'Av. Intercomunal C.C. Cristal Plaza, nivel pb, local pb 4, sector Colinas de Neveri.',
                    'Aliado Zoom MBE Barcelona C.A.' => 'Av. La Costanera, C.C. Puente Real, nivel pb, pb 40-d urbanizacion Nueva Barcelona.',
                    'Aliado Zoom Cardos C.A.' => 'Calle San Carlos, casa 26, local 3, urb La Montañita.'
                ),
                'Anaco' => array(
                    'Zoom ANACO' => 'Calle 5 de Julio, edif San Elias, pb nro 3-23b, a una cuadra de Banesco.',
                    'Aliado Zoom Servicentro Anaco, C.A.' => 'Sector  centro av. Bolivar, local no. Pb n1. Anaco.',
                    'Aliado Zoom Inversiones Segugama.' => 'Av Bolivar casa 91, sector Casco Central.',
                    'Aliado Zoom FV Comunicaciones C.A.' => 'Sector Viento Fresco, av. José Antonio Anzoategui, C.C. Super Estación, nivel pb local no 09.',
                    'Zoom taquilla Makro' => 'Av. José Antonio Anzoateguí con av este de pdvsa, al lado del comando de la guardia nacional.'
                ),
                'Aragua de Barcelona' => array(
                    'Aliado Zoom farmacia Mediaragua C.A.' => 'Calle Bolivar cruce con calle Colón no. 83. Sector casco central, frente al banco de Venezuela.'
                ),
                'Lecherias' => array(
                    'Mail Boxes etc Bahia de Pozuelos' => 'Bahia de Pozuelos MBE 33, av principalal de Lecherías, C.C. Empresarial Lecheria nivell pb, local 3, sector Las Palmeras.',
                    'Aliado Zoom Libreria papeleria y regalos Horizonte C.A' => 'Sector Crucero de Lecheria, av. Jorge Rodriguez, C.C. Vistamar, nivel Pb. local N° 16 y 03.',
                    'Aliado Zoom Preview C.A.' => 'Calle 4 con carrera 6, local Paty, Pb. local 2, sector casco central Lecherias.',
                ),
                'Puerto Piritu' => array(
                    'Aliado Zoom Soluciones Jordi C.A.' => 'Sector la Avenida Puerto Piritu, av. Peñalver, C.C. Hotel casa grande, nivel N°. 1, pb local n°  2.'
                )
            );
            $datos['Apure'] = array(
                'San Fernando de Apure' => array(
                    'Zoom san Fernando de Apure' => 'Av Carabobo con esquina calle Cajuarito edif. Kassas local s/n.',
                    'Aliado Zoom farmacia San Miguel (Mantecal)' => 'Carrera N° 3, casa s/n sector centro.'
                    )
            );
            $datos['Aragua'] = array(
                'Cagua' => array(
                    'Aliado Zoom G&M Logistics Express, c.a.' => 'Sector sur centro, calle comercio, N° 73-39.',
                    'Zoom Cagua' => 'Sector centro, calle Rondon c/c calle Bermudez nº 104-03-07, local l-3.'
                ),
                'La Victoria' => array(
                    'Zoom la Victoria' => 'Calle Rivas Davila, C.C. Victoria Center, primera etapa, nivel pb local A-6.'
                ),
                'Maracay' => array(
                    'Aliado Zoom Corporacion Calitri, C.A.' => 'Av. Bermudez, cruce con av. Aragua, C.C. Maracay Plaza, nivel planta baja, local 61-d.',
                    'Aliado Zoom Service Express Federal C.A.' => 'Av. Mariqo sur, Centro Empresarial Uniaragua, planta baja, local 1.',
                    'Aliado Zoom Inversiones Full PC C.A.' => 'Av. 19 de Abril, C.C. La Capilla 1, local n°. 9 nivel p/b.',
                    'Mail Boxes etc Maracay MBE 30' => 'Urbanización Base Aragua, C.C. y hotel Paseo las Delicias nivel av, local av-24.',
                    'Shipnet Maracay C.A.' => 'Av. Las Delicias, Centro Empresarial Europa piso 1, local 1-18.',
                    'Zoom Pácifico' => 'Av. Bolivar oeste, C.C. pácifico, Pb local nº 6.  A 50 metros del C.C. parque aragua. (Colegio de Contadores Públicos).',
                    'Zoom Maracay' => 'Av. Anthon Phillips, Zona Industrial San Vicente, C.C. San Vicente, local 2. (Al lado de empresas saviran).',
                    'Aliado Zoom Inversiones Castillo 2010 C.A.' => 'Sector El Limón, av. Universidad, C.C. El Limón, nivel pb, local n°. 03'
                ),
                'Palo Negro' => array(
                    'Aliado Zoom Inversiones mi Angeluz TR C.A.' => 'Sector centro, av. Bolivar, C.C. Flor de Aragua, nivel pb., local 1.'
                ),
                'Turmero' => array(
                    'Aliado Zoom Transpeco C.A.' => 'Sector La Morita, av. Dr. Francisco Montoya, C.C. Diga Center, pb, local 01.'
                )
            );
            $datos['Barinas'] = array(
                'Barinas' => array(
                    'Zoom Barinas' => 'Av. Elias Cordero, n° 1- 120. (Frente a Suelapiel).',
                    'Zoom Barinas Centro' => 'Sector Barrio obrero, calle Camejo entre av. Montilla y av. Olmedilla, edificioLos Hermanos.',
                    'Aliado Zoom Big Ben Servicios Empresariales C.A.' => 'Alto Barinas norte, av. Colombia, local 80-c, frente al golfito.',
                    'Aliado Zoom Refrigeración Tijuana 2013 C.A.' => 'Urb. Corazón de Jesus, av. Chupa entre calle Cedeño, Chupa local n°. 7-50.',
                    'Aliado Zoom Inversiones y Servicios Construc Express C.A' => 'Av. Venezuela con calle Justicia local, n°. 127 b-3, urb, Alto Barinas sur'
                )
            );
            $datos['Bolivar'] = array(
                'Ciudad Bolivar' => array(
                    'Zoom Ciudad Bolivar' =>'Av. Jesus Soto con calle Caura, C.C. Tepuy, local 1 y 2, pb.',
                    'Aliado Zoom MN Llamadas C.A.' =>'Paseo Meneces cruce con calle Independencia C.C. Independencia nivel p.b local U.'
                ),
                'Puerto Ordaz' => array(
                    'Zoom Puerto Ordaz' => 'Sector unare, zona industrial i, calle tunapuy, p.ref. Diagonal al tigasco.',
                    'Zoom C.C. Mamy' => 'Sector altavista, carreras tocoma y cachamay, p.ref. Frente al parque mecanico.',
                    'Zoom Trebol' => 'C.C. trebol, local 14, niveles estacionamiento y pb.',
                    'Mail Boxes etc Puerto Ordaz MBE 23' => ' av. Guayana, alta vista, torre colon , planta baja, locales 01 y 02',
                    'Aliado Zoom Region 416 C.A. (Unare)' => 'Calle neveri, C.C. plaza, aeropuerto, pb., local. N°. 7.',
                    'Aliado Zoom Region 416 C.A.' => 'Av. Monseñor zabaleta, edf. Atlantico, pb., local 1.'
                ),
                'San Félix' => array(
                    'Zoom san felix' => 'Sector el roble, av. Morena mendoza, C.C. la cariñosa, local c.',
                    "Aliado Zoom Kiki's PC C.A." => 'Av dalla costa edif almary pb 1-a local 2-a dalla costa',
                    'Aliado Zoom Región 416 C.A. (San Félix)' => 'Sector centro, calle sucre, C.C. miranda, nivel pb. Local n°. 03, frente a la plaza miranda.',
                    'Aliado Zoom Autocambi C.A.' => 'Av. Manuel piar, parcela n°. 112-06-19-a, pb , local c, san felix.'
                ),
                'Santa Elena de Uairen' => array(
                    'Santa Elena de Uairen' => 'Sector casco central, calle Urdaneta, local sin nro.'
                ),
                'Upata' => array(
                    'Aliado Zoom Celular Ping I C.A.' => 'Calle ricaurte cruce con union, edificio franzul, local comercial nº 2, planta baja.'
                )
            );
            $datos['Carabobo'] = array(
                'Valencia' => array(
                    'Zoom Valencia' => 'Av. Este oeste con calle 97, urb. san diego, parque comercial industrial castillito parcela l-70 y l-78.',
                    'Zoom C.C. Paz Barrera' => 'Av. Diaz moreno c/calle paez, C.C. paz barrera, local 7, centro de valencia.',
                    'Zoom C.C. Bulevar Plaza' => 'Av constitucion con calle comercio C.C. bulevar plaza p.b local c-3 centro de valencia',
                    'Aliado Zoom Omega Colors C.A.' => 'Sector, flor amarillo valencia, av. N°. 107-c, local C.C. la fundacion n°. 1',
                    'Aliado Zoom Inversiones Stallone C.A.' => 'Valencia center pb, local nro 38, al frente del colegio republica del peru, detrás del registro civil.',
                    'Aliado Zoom Comercializadora 323 C.A.' => ' calle paez entre bruzual y negro primero, local a-01.',
                    'Aliado Zoom Grupo Moreno Villalba 728 C.A.' => 'Calle colombia n°. 90-72,',
                    'Aliado Zoom Inversiones KFF C.A.' => 'Ector la granja, av. Universidad, estacion de servicio paramacay.',
                    'Aliado Zoom Plaza Center Comunicaciones' => 'Av. Central, c.c los caobos, local 6 urb. Los caobos punto de referencia modulo policial los caobos.',
                    'Mail Boxes etc MBE viña plaza' => 'Av. Carabobo cruce con av. Juan uslar, centro corporativo la viña plaza, nivel 1, local 2-16',
                    'Aliado Zoom Punto Post C.A. (San Diego)' => 'Av. Boulevard norte 102 C.C. boulevard norte local # 3 urb. San diego'
                ),
                'Bejuma' => array(
                    'Aliado Zoom Celex Bejuma C.A.' => 'Sector centro, calle heres entre avenidas los fundadores y sucre local nro 1'
                )
            );
            $datos['Cojedes'] = array(
                'San Carlos' => array(
                    'Zoom San Carlos' => 'Av. Bolivar cruce con calle silva, C.C. colavita, planta baja, locales l1 y l2.'
                ),
                'Tinaquillo' => array(
                    'Aliado Zoom Inversiones Ticoven 2121 C.A.' => 'Sector centro tinaquillo, av. Miranda, C.C. the creaciones, ironman guerra, nivel-local n°. 1-10.al lado de repuestos pacheco'
                    )
            );
            $datos['Delta Amacuro'] = array(
                'No disponible' => 'No disponible'
            );
            $datos['Distrito Capital'] = array(
                'Caracas' => array(
                    'Zoom La Urbina' => 'Sector sur, calle 7, urb la Urbina, edf. grupo Zoom.',
                    'Zoom C.C. Galerías el Paraíso' => 'Av. José Antonio Páez C.C., urb. El Paraíso, galerías el paraíso, nivel paraíso, local 17-a piso p-a. (no vamos abrir los domingos, solo de lunes a sábado.)',
                    'Zoom Taquilla Día a Día Unicentro el Marques' => 'Av. Francisco de miranda, urb. La california, C.C. unicentro el marques, planta baja, local 1. P.ref. Dentro practimercado dia dia.',
                    'Zoom taquilla Makro la Yaguara' => 'Av. Intercomunal de antimano cruce con av. Principal de la yaguara.',
                    'Zoom taquilla Día Día av. Andrés Bello' => 'Av. Andrés bello, entre calle santa rosa y 3era transversal de guaicaipuro, edf. Carlos rolh.',
                    'Zoom taquilla Makro la Urbina' => 'Av. Rómulo gallegos, urbanización la urbina, p.ref. En carretera vieja petare.',
                    'Zoom cdo. Catia' => 'V.ppal de AltaVista, a 50 metros de la textileria ovejita, galpón grupo Zoom.',
                    'Zoom C.C. City Market' => 'Calle unión con villaflor cc city market nivel sotano boulevard de sabana grande',
                    'Zoom la California' => 'Av. Francisco de miranda, residencias monaca, local b. P.ref. Frente al unicentro el Marquez.',
                    'Zoom la Urbina taquilla ii' => 'Calle 1-1, con calle 3-b, edificio danni rossi, nivel planta baja.',
                    'Zoom Palo Verde' => 'Av. Principal de palo verde, C.C. palo verde plaza, 2do nivel, local 13-b.',
                    'Zoom Chacaito ii' => 'C.c. arta p.b. local 4.',
                    'Zoom Super Centro Petare' => 'Av. Principal de la Urbina, súper centro petare, nivel galería, g-09. G-11,.',
                    'Zoom San Martin' => 'Av. San Martin, entre la 2da y 3era calle los molinos, urb. Los molinos, edificio komplot, pb. P.ref. Edificio komplot, pb',
                    'Zoom parque Humboldt' => 'Urb. Prados del este, C.C. parque Humboldt, local 10.',
                    'Zoom Plaza Venezuela' => 'Sector plaza Venezuela, av. La Salle, edificio la Salle, pb., locales pb3 y pb4.',
                    'Zoom Bello Campo' => 'Final av. Principal de bello campo, urb. Bello campo, qta. Grupo Zoom.',
                    'Zoom Caricuao' => 'Av. Principal Ruiz Pineda, urb. Ruiz pineda, C.C. Caricuao plaza, pb., ud-7.',
                    'Aliado Zoom Inversiones Binacom C.A.' => 'Av. Ppal. De sta. Marta, C.C. sta. Marta, local 12, areanet, pb.',
                    'Aliado Zoom distribuidora Puli, C.A.' => 'Av. Fuerzas armadas norte, esq. San José a san Luis, edf. Residencia san jose.',
                    'Shipnet Manzanares C.A.' => 'Av. Principal c.c manzanares ii nivel mirador local m104',
                    'Aliado Zoom Inversiones mb33 C.A.' => 'Avenida del Ávila, res. Belmont, pb., local 01, Altamira sur.',
                    'Aliado Zoom Suplidora Global 3000 C.A.' => 'Avenida Lecuna, edf. Caroata, piso mezzanina, ofc. 20m-17. Urb. Parque central',
                    'Shipnet Centro Lido' => ' av. Francisco de miranda. Ctro. Comercial lido. Nivel galerías. Local g-4. El rosal'
                )
            );
            $datos['Falcon'] = array(
                'Punto Fijo' => array(
                    'Zoom punto Fijo' => 'Sector centro, calle Arismendi, entre talavera y las palmas, local 203.',
                    'Aliado Zoom fcg 26 C.A.' => 'Av. Principal de antiguo aeropuerto, edf. Mercado turístico de la parroquia norte, piso 1, local 104-a.',
                    'Aliado Zoom k&e Global Int C.A.' => 'Av prolongación Girardot esq/c Tumarusa local nro 03 sector santa Irena',
                    'Mail boxes etc punto fijo MBE 32' => 'V. Pumarrosa, edificio María luisa, número 61-16, local 2, urbanización santa fe',
                    'Aliado Zoom Trade Express C.A.' => 'Urb. Puerta Maraven, av. Ollarvides, local n°. 264.'
                ),
                'Paraguana' => array(
                    'Aliado Zoom Papelmania.com C.A.' => 'Sector casco central pueblo nuevo, calle falcon, casa s/n.'
                ),
                'Coro' => array(
                    'Zoom coro' => 'Sector los tres platos, av. Los medanos cruce con av. Independencia, edificio aref, pb., local 1',
                    'Aliado Zoom Construcciones Civiles Generales cgc C.A.' => 'Sector Curazaito, av. El Tenis con esquina, av. Sucre, edf. Total'
                )
            );
            $datos['Guárico'] = array(
                'Valle de la Pascua' => array(
                    'Zoom valle de la Pascua' => 'Calle Bolívar entre calles atarraya y González padrón, p.ref. Fte. A las oficinas de Filigas.'
                ),
                'San Juan de los Morros' => array(
                    'Zoom san Juan de los Morros' => 'Final av. Roscio, res. Femel pb. Local b.'
                ),
                'Calabozo' => array(
                    'Zoom Calabozo'=> 'Calle 5 entre carreras 9 y 10, edificio villavicencio, p.b locales 5 y 6. P.ref. A 50 mts del museo de calabozo.',
                    "Aliado Zoom Pablo's electro shop C.A." => 'Carrera 13 con av.octavio viana, edif. San judas tadeo p.b casco central.'
                ),
                'Altagracia de Orituco' => array(
                    'Aliado Zoom Inversiones c.s.m. C.A.' => 'Calle Hurtado Ascanio local nro 03. Sector el Cumbito'
                )
            );
            $datos['Lara'] = array(
                'Barquisimeto' => array(
                    'Zoom Barquisimeto' => 'Carrera 24, entre calles 23 y 24, n°. 23-69. P.ref. Frente a la plaza Mora, diagonal al Iuturla.',
                    'Zoom Aeropuerto Jacinto Lara' => 'Av. Vicente Landaeta Gil con av. La Salle, Aeropuerto General Jacinto Lara p.b.',
                    'Aliado Zoom Exicom 101 C.A.' => 'Av. Lara cruce con calle 3, urbanizacion Nueva Segovia, edificio Yurubi, pb., local 2.',
                    'Aliado Zoom Mercarepuestos AP C.A.' => 'Urb. La Rosaleda, calle principal, de la Rosaleda, C.C. Los Cardones, nivel n°. 1, local n°. 29.',
                    'Mail boxes etc Barquisimeto MBE 38' => 'Av. Venezuela, entre av. Bracamonte y av. Los Leones, C.C. Imeca, piso 1, local 1-h y 1-g.',
                    'Aliado Zoom Print Solutions C.A.' => 'Av. Madrid, urb. El Parque, C.C. Alfa, nivel pb, local 6.',
                    'Aliado Zoom Etesca, C.A.' => 'Carrera 25, entre calle 40 y 41 nº 2.',
                    'Aliado Zoom Transporte Fortaleza, C.A.' => 'Carrera 23, entre calles 52 y 54, Urbanizacion Santa Eduvigis, Conjunto Residencial Lara Palace, nro. 1-06.',
                    'Aliado Zoom RR Inversiones Tecnologicas, C.A.' => 'Sector centro, carrera 19, entre calles 35 y 36, edf. Centro, Empresarial piso pb., local 5.'
                ),
                'Cabudare' => array(
                    'Zoom Cabudare' => 'Avenida libertador entre calles miguel bernal y juárez, C.C. libertador, locales pb-02 y pb-03.'
                ),
                'Carora' => array(
                    'Zoom Carora' => 'Avenida Francisco de Miranda con esquina calle Riera Silva, edificio Arca 8, planta baja, locales A y B.'
                ),
                'El Tocuyo' => array(
                    'Aliado Zoom Distribuidora del sur 83, C.A..' => 'Sector centro, entre avenida Lisandro Alvarado y Fraternidad, calle 20, local n°. 1'
                )
            );
            $datos['Mérida'] = array(
                'Mérida' => array(
                    'Aliado Zoom Feldors C.A.' => 'Sector el arado, calle n°. 9, C.C. unicentro los angeles, nivel pb., local n°. 4.',
                    'Aliado Zoom Casa Senis C.A.' => 'Centro de comunicaciones cantv en la carrera 3 diagonal al colegio de abogados sector el añil'
                )
            );
            $datos['Miranda'] = array(
                'San Antonio de los Altos' => array(
                    'Aliado Zoom envíos los Salias C.A.'=> 'Carretera panamericana km 16 bajando por el distribuidor de la rosaleda (sentido caracas) a mano derecha 100 mts antes del C.C. la casona i, local Zoom.',
                    'Aliado Zoom la boutique de los servicios C.A.'=> 'Sector Don Blas, av. Los Salias, C.C. don blas, nivel pb., local g.'
                ),
                'Los Teques' => array(
                    'Zoom los Teques' => 'Sector el tambor, av. Pedro Ruffo Ferrer, C.C. los Teques local a5. P.ref. Frente al banco de Venezuela.'
                ),
                'Guatire' => array(
                    'Zoom C.C. Buenaventura Vista Place' =>'Av. Intercomunal guarenas-guatire, C.C. buenaventura vista place nivel plaza locales pl-94 y pl-95.',
                    'Aliado Zoom Centro de Servicios Lira 1989 C.A.' =>'Av. Miranda con girardot, edf. OfiC.C., lira piso n°. 1, ofc. N°. 10-1, zona ciudad guatire. Frente al ambulatorio de la acaldia en la plaza de guatire.',
                    'Aliado Zoom Services M.O.L C.A.' =>'Av. Intercomunal guatire-guarenas c.c oasis center nivel p.b local m-06 frente a los ascensores.'
                ),
                'Guarenas' => array(
                    'Zoom Guarenas' => 'Zona industrial santa cruz, urb. Los naranjos, p.ref. Pasando los boMBEros entrando por la levis al lado de pandok.',
                    'Zoom C.C. Miranda' => 'Av. Intercomunal Menca de Leoni, C.C. miranda, local 30-22. P.ref. Area de minitiendas, parte alta de guarenas.'
                ),
                'Charallave' => array(
                    'Zoom Charallave' => 'Sector Sucua, final av. Tosta garcia, edf. Boal, local b-1, pb.'
                )
            );
            $datos['Monagas'] = array(
                'Punta de Mata' => array(
                    'Aliado Zoom csp56, c.a' => 'Ctra via el sur, km 03, c.profesional la cascada, pb local 15 (al lado del seniat)'
                ),
                'Maturín' => array(
                    'Zoom Maturín' => 'Sector antigua pichincha, av. Bolivar con calle 22, edf. Rosalia, pb. P.ref. Frente a la plaza piar.',
                    'Zoom Libertador' => 'Sector Fundemos, av. Libertador cruce con avenida ejercito, local Zoom.',
                    'Aliado Zoom csp56 C.A.' => 'Ctra via el sur, km 03, c.profesional la cascada, pb local 15 (al lado del seniat)',
                    'Aliado Zoom Multiservicios Herso C.A.' => 'Calle principal, C.C. los samanes, local 1, planta baja, sector los samanes.',
                    'Aliado Zoom Nexus Venezuela C.A.' => 'Calle rojas casa n°. 114, sector centro'
                )
            );
            $datos['Nueva Esparta'] = array(
                'Porlamar' => array(
                    'Zoom Porlamar' => 'Av. 4 de mayo, residencias Panerco, planta baja, local 1.',
                    'Zoom Porlamar Centro' => 'Calle Velásquez con calle Días, C.C. Concord, locales 31 y 32. P.ref. Antiguo cada.',
                    'Zoom Porlamar Centro Ejecutivo' => 'Planta baja y mezzanina del edificio centro ejecutivo 4 de mayo. Av. 4 de mayo',
                    'Mail boxes etc. MBE Margarita C.A.' => 'Av paseo cultural Ramón Vásquez Brito cc boulevard Porlamar edificio s nivel 1 local s-3a sector 4 de mayo',
                    'Aliado Zoom Affari Boom C.A.' => 'Sector conejeros, calle Prica, c/c sigo la Proveeduría, nivel pb., local s/n.',
                    'Aliado Zoom Envíos Record C.A.' => 'Av. Juan bautista Arismendi, C.C. las villas, nivel pb., local 7.'
                ),
                'Pampatar' => array(
                    'Aliado Zoom Xijap C.A. los Robles' =>'Av Jovito villalba C.C. centro artesanal los robles nivel p.b',
                    'Aliado Zoom Mar Express 2004 C.A.' =>'Rattan Plaza	Sector playa el angel, avenida jovito villaba,C.C. automotriz plaza, nivel mezzanina, local galpon 04.'
                ),
                'La Asunción' => array(
                    'Aliado Zoom Isla Stamping S21S C.A.' => 'Calle virgen del carmen, edificio el bampres, piso pb., local n°. 1.'
                ),
                'Juan Griego' => array(
                    'Aliado Zoom Distribuidora Mimisima' => 'C.c. La Estancia, local l23, Juan Griego.'
                )
            );
            $datos['Portuguesa'] = array(
                'Guanae' => array(
                    'Zoom Guanare' => 'Av. Simón Bolívar entre av. Unda y calle 9, C.C. autocentro, pb. Local Zoom.',
                    'Aliado Zoom Encomiendas Gals C.A.' => 'Sector la arenosa, carrera 11, esquina calle 14, edf. Molise ii, p. Pb., local s/n.'
                ),
                'Acarigua' => array(
                    'Zoom Acarigua' => 'Calle 30 con av. 35, C.C. Páez, planta baja, local 02.',
                    'Aliado Zoom global Express C.A.' => 'Av. Libertador, e/ calles 32 y 33 C.C. sol de Curpa nivel pb., local 7',
                    'Aliado Zoom AG Servicios C.A.' => 'Sector redoma de Araure, av. Municipalidad, C.C. buenaventura, nivel agricola, local a-19.',
                    'Aliado Zoom Representaciones m y r C.A.' => 'Av. Libertador entre av.13 de julio y calle 21, C.C. Victoria Plaza, locales 8 y 9.'
                )
            );
            $datos['Sucre']  = array(
                'Cumaná' => array(
                    'Zoom Cumana' => 'Calle Mariño, edf. San Ignacio pb., local 1. P.ref. Frente al C.C. cumaná plaza.',
                    'MBE Cumana ii C.A.' => 'Av Santa rosa cc Taomina nivel pb local 06 sector parcelamiento',
                    'MBE Cumana' => 'Av. Cristobal colon Perimetal, sec. El Diqui, C.C. marina plaza, edif. D-3, local p.b.-4',
                    'Aliado Zoom Flevimar C.A.' => 'Sector santa rosa, av. Santa rosa, C.C. santa rosa, nivel pb., local 06'
                ),
                'Carúpano' => array(
                    'Zoom Carúpano' => 'Av. Libertador con calle Monagas, edf. Turbo oriente, p. Pb., parroquia santa catalina, municipio Bermúdez.',
                    'Zoom taquilla Makro Carúpano' => 'Sector los molinos, primero de mayo, av. Perimetral sur.'
                )
            );
            $datos['Táchira']  = array(
                'San Cristóbal' => array(
                    'Zoom Taquilla 5ta Avenida' => '5ta. Avenida entre calles 3 y 4, C.C. libertad-local 108. P.ref. A 100 mts del del viaducto viejo.',
                    'Zoom Multiservicios Barrio Obrero' => 'Calle 11 entre carreras 18 y 19 nro 19-59, calle 11 entre carreras 18 y 19 nro 19-59.',
                    'Aliado Zoom Representaciones Triple A C.A.' => 'Calle e , edificio tienda express, zona industrial de paramillo, San Cristóbal.',
                    'Aliado Zoom Inversiones Mifer C.A.' => 'Pasaje acueducto, n° 10, calle 119, local # 01, barrio obrero',
                    'Aliado Zoom Comunicaciones Ramicol C.A.' => 'Urb. El Sinaral, av. Principal, edf. El Sinaral, piso pb, local n°. 5. San Cristóbal'
                ),
                'San Antonio del Táchira' => array(
                    'Zoom San Antonio' => 'Calle 9 entre carreras 10 y 11 número 10-44 barrio la popa san Antonio del Táchira.',
                    'Aliado Zoom Valykar C.A.' => 'Carretera vía san Antonio Ureña, sector José Félix Rivas, nro. 187, local 1, el Palotal, san Antonio del Táchira'
                ),
                'La Fría' => array(
                    'Aliado Zoom centro de conexiones la fría C.A.' => 'Sector terminal de pasajeros la Fría, calle 2 entre carreras 18 y 19, local nro. 25'
                )
            );
            $datos['Trujillo']  = array(
                'Valera' => array(
                    'Zoom Valera' => 'Sector las acacias, av. Bolívar entre calles 21 y 22, edf. Herpa local 1 y 2.'
                ),
                'Boconó' => array(
                    'Aliado Zoom Inversiones mundo Electronic Boconó C.A.' => 'Sector centro, av. Carabobo entre calle monseñor Jáuregui y Andrés bello, casa n°. 6-22.'
                )
            );
            $datos['Vargas'] = array(
                'Maiquetía' => array(
                   'Aliado Zoom Inversiones R.C. 2014 C.A.' => 'Calle manzana b de Pariata, edificio David, piso 1, local Inversiones rc 2014 c.a.'
                ),
                'Catia la Mar' => array(
                    'Catia la mar' => 'Av. Atlántida, calles 5 y 6, qta. Hucarimar, pb. Local 1.'
                ),
                'Caraballera' => array(
                    'Aliado Zoom Inversiones la costanera 1725 C.A.' => 'Av. La costanera con Copacabana, C.C. margarita, nivel s/n, local s/n, urb. Palmar este.'
                ),
            );
            $datos['Yaracuy'] = array(
                'Yaritagua' => array(
                    'Aliado Zoom La Boutique del Celular Yaritagua C.A.' => 'av. Padre torres. Calle 19 entre carretera 11 y 12.'
                ),
                'San Felipe' => array(
                    'Zoom San Felipe' => 'Av. La patria con av. 19 de abril, C.C. Aracoi, local c-5. P.ref. Fte. A oficinas de caley.'
                )
            );
            $datos['Zulia'] = array(
                'Villa del Rosario' => array(
                    'Aliado Zoom Inversiones Martínez Ybarra C.A.' => 'Sector casco central la villa del rosario, av. N°. 18 de octubre, local n°. 18-13.'
                ),
                'Santa Bárbara del Zulia' => array(
                    'Zoom santa Bárbara' => 'Av. Principal gran Colombia con calle santo domingo, C.C. gran colombia, local n° 03.'
                ),
                'Maracaibo' => array(
                    'Zoom Maracaibo' => 'Av. 15 con calle 70, diagonal al gran hotel las delicias, local 70-02. P.ref. Antiguo superm.valle claro.',
                    'Zoom Cada 5 de julio' => 'Av. 5 de julio con calle 20, C.C. cada.',
                    'Zoom la Chinita' => 'Av. 15, entre calles 93 y 95, C.C. la chinita, primer nivel, local n° 26. P.ref. Por la feria de comida.',
                    'Zoom 5 de julio C.A.' => 'Avenida 5 de julio, calle 77 con av. 12.',
                    'Zoom Sierra Maestra' => 'Av. Principal sierra maestra, km. 1, C.C. sur.',
                    'Aliado Zoom 35 mm C.A.' => ' avenida la limpia, C.C. la limpia d´candido, plaza nivel pb., local pb-l11.',
                    'Aliado Zoom Lagobox C.A.' => 'Avenida 10, c/calle 66-a, C.C. alides, local nº 01.',
                    'Aliado Zoom Inversiones Chacín Arcaya hijos C.A.' => ' sector valle frio, av. 2b con calle n°. 83b, casa n°. 83b-28.',
                    'Aliado Zoom Grupo Maucovenca C.A.' => 'Sector bella vista, calle n°. 74, con av. N°. 3y, local candeloro n°. 5-a.',
                    'Aliado Zoom Wendy Inversiones Tecno venezolanas C.A.' => 'Sector san jacinto, av. Goajira, C.C. ferre mall, nivel pb, local pb- b2.',
                    'Aliado Zoom Servi-mara' => 'Av. 3 y entre calles 82b y 83 sector santa lucia c.c los pirineos local 20',
                    'Aliado Zoom Bahia Conexiones C.A.' => 'Av. 40, milagro norte, C.C. bahia del lago, local 11.'
                ),
                'Ciudad Ojeda' => array(
                    'Zoom ciudad Ojeda' => 'Sector las morochas, av. Intercomunal calle cardón, edificio ojeda. Pb., locales 6 y 7.'
                ),
                'Cabimas' => array(
                    'Zoom Cabimas' => 'Sector bello monte, av. Intercomunal con carretera g, C.C. los ángeles, locales 1 y 2.'
                )
            );
            wp_register_script('pickup-location-js', get_template_directory_uri() . '/assets/js/pickup-locations.js', false, null);
            wp_enqueue_script('pickup-location-js');
	        wp_localize_script('pickup-location-js', 'ajax_object', $datos);
        }
    }
}
add_action('wp_enqueue_scripts', 'pickupLocation_enqueue', 100);