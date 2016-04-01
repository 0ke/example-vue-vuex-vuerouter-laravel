import {TOGGLESCHEME, TOGGLELOCALE, USERAUTHENTICATED, ISUSERAUTHENTICATED, USERPLAYLIST, RANDOMPLAYLIST} from './mutation-types'

export const togglescheme = ({ dispatch }) => dispatch(TOGGLESCHEME)
export const toggleLocale = ({ dispatch }) => dispatch(TOGGLELOCALE)

export const userWasAuthenticated = ({ dispatch, state }, response) => dispatch(USERAUTHENTICATED,response)

export const isUserAuthenticated = ({ dispatch, state }) => dispatch(ISUSERAUTHENTICATED)

export const getUsersPlaylist = ({ dispatch, state }) => dispatch(USERPLAYLIST)

export const getRandomPlaylist = ({ dispatch, state }, queue) => dispatch(RANDOMPLAYLIST,queue)
