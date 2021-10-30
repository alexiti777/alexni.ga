import "./styles.css";
import React from "react";

export default function App() {
  return <Voter likes={23} />;
}

export class Voter extends React.PureComponent {
  state = { likes: this.props.likes };

  render() {
    return (
      <div className="voter-container">
        <button className="button gray" onClick={this._upvote}>
          Like
        </button>
        <span>{this.state.likes}</span>
        <button className="button gray" onClick={this._downvote}>
          Dislike
        </button>
      </div>
    );
  }

  _upvote = () => {
    this.setState((state) => ({ likes: state.likes + 1 }));
  };
  _downvote = () => {
    this.setState((state) => ({ likes: state.likes - 1 }));
  };
}