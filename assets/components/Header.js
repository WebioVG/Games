import React from 'react';

class Header extends React.Component {
    render() {
        return (
            <header className='h-[10vh] px-5 flex justify-center items-center border-b bg-slate-100 mb-5'>
                <h1 className='text-3xl'>Games</h1>
                <ul className='grow flex justify-end gap-3 text-xl'>
                    <li><a className='pb-2 border-black hover:border-b' href="#">Home</a></li>
                    <li><a className='pb-2 border-black hover:border-b' href="#">About</a></li>
                </ul>
            </header>
        )
    }
}

export default Header;